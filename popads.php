<?php

$pa_orep = error_reporting(0);

class PopAdsAdcode {

	/* Gerador de Código */
	var $minBid = 0;
	var $popundersPerIP = 0;
	var $delayBetween = 0;
	var $defaultPerDay = 0;
	var $topmostLayer = 0;
	/* URL para codificação em Base64 Javascript */
	var $default = false;
	/* configurações individualmente atribuídas */
	var $key = '3ca3fbf002b1f8d540e1d486826565395c09e833';
	var $siteId = 1476831;
	/* É melhor deixar abaixo como está, realmente */
	var $antiAdblock = 1;
	var $obfuscate = 1;

	/* Definido como verdadeiro, se o servidor suportar adequadamente SSL ( OpenSSL ou equiv instalado e IPv6 resolve desativando, causa de problemas ao tentar resolver o domínio em determinadas configurações ) */
	var $ssl = false;
	/* Definido para false para suprimir a saída de informações de depuração */
	var $verbose = true;
	/* Definido para substituir o diretório de cache adcode */
	var $adcodeDir = false;

	function get_curl($url) {
		/* teste de capacidade */
		if ((!extension_loaded('curl')) || (!function_exists('curl_version')))
			return false; /* se a URL não existe */
		/* inicializar o objeto */
		curl_setopt_array($curl = curl_init(), array(
			CURLOPT_RETURNTRANSFER => 1,			CURLOPT_USERAGENT => 'PopAds CGAPIL A',
			CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,	CURLOPT_FOLLOWLOCATION => false,
			CURLOPT_SSL_VERIFYPEER => true,			CURLOPT_HEADER => false,
			CURLOPT_HTTPHEADER => array('Accept: text/plain,application/json;q=0.9')
		));
		/* teste de capacidade para HTTPS */
		if ($this->ssl && (($version = curl_version()) && ($version['features'] & CURL_VERSION_SSL))) {
			curl_setopt($curl, CURLOPT_URL, 'https://www.popads.net' . $url);
			if ($code = curl_exec($curl)) {
				curl_close($curl);
				return $code;
			}
		}
		/* Prosseguir via HTTP */
		curl_setopt($curl, CURLOPT_URL, 'http://www.popads.net' . $url);
		$code = curl_exec($curl);
		curl_close($curl);
		return $code; /* Falso em caso de falha */
	}

	/* Não recomendado; não envia cabeçalho Accept , nenhum controle sobre a verificação de pares SSL, pode tentar resolver IPV6 */
	function get_fgc($url) {
		/* teste de capacidade */
		if ( (!function_exists('file_get_contents')) || (!ini_get('allow_url_fopen')) || ((function_exists('stream_get_wrappers')) && (!in_array('http', stream_get_wrappers()))) )
			return false; /* file_get_contents does not exist or does not support URL retrieval at all */
		/* teste de capacidade para HTTPS (PHP5+) */
		if ($this->ssl && ((!function_exists('stream_get_wrappers')) || (in_array('https', stream_get_wrappers())))) {
			$code = file_get_contents('https://www.popads.net' . $url);
			if ($code)
				return $code;
		}
		/* prosseguir via HTTP */
		return file_get_contents('http://www.popads.net' . $url); /* False on failure */
	}

	/* Não recomendado; nenhum controle sobre a verificação SSL , pode tentar resolver IPV6 se estiver usando HTTPS */
	function get_fsock($url) {
		$enum = $estr = $in = $out = '';
		/* teste de capacidade */
		if ($this->ssl && ((!function_exists('stream_get_wrappers')) || (in_array('https', stream_get_wrappers())))) {
			$fp = fsockopen('ssl://' . 'www.popads.net', 443, $enum, $estr, 10);
		}
		/*Inicializar a conexão simples */
		if ((!$fp) && (!($fp = fsockopen('tcp://' . gethostbyname('www.popads.net'), 80, $enum, $estr, 10))))
			return false;
		$out .= "GET " . $url . " HTTP/1.1\r\n";
		$out .= "Host: www.popads.net\r\n";
		$out .= "User-Agent: PopAds CGAPIL C\r\n";
		$out .= "Accept: text/plain,application/json;q=0.9\r\n";
		$out .= "Connection: close\r\n\r\n";
		fwrite($fp, $out);
		while (!feof($fp)) {
			$in .= fgets($fp, 1024);
		}
		fclose($fp);
		return substr($in, strpos($in, "\r\n\r\n") + 4);
	}

	/* Não recomendado; sem suporte SSL em tudo */
	function get_sock($url) {
		$in = $out = '';
		/* Apenas HTTP, último recurso */
		if (!($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)))
			return false;
		socket_set_block($sock);
		if (!socket_connect($sock, gethostbyname('www.popads.net'), 80))
			return false;
		$out .= "GET " . $url . " HTTP/1.1\r\n";
		$out .= "Host: www.popads.net\r\n";
		$out .= "User-Agent: PopAds CGAPIL D\r\n";
		$out .= "Accept: text/plain,application/json;q=0.9\r\n";
		$out .= "Connection: close\r\n\r\n";
		socket_send($sock, $out, strlen($out), MSG_EOF);
		$in = socket_read($sock, 32768);
		socket_close($sock);
		return empty($in) ? false : substr($in, strpos($in, "\r\n\r\n") + 4);
	}

	function tmp_dir() {
		$paths = array_unique(array_filter(array(
			'usr' => $this->adcodeDir,
			'ssp' => realpath(session_save_path()),
			'utd' => realpath(ini_get('upload_tmp_dir')),
			'env1' => (!empty($_ENV['TMP'])) ? realpath($_ENV['TMP']) : false,
			'env2' => (!empty($_ENV['TEMP'])) ? realpath($_ENV['TEMP']) : false,
			'env3' => (!empty($_ENV['TMPDIR'])) ? realpath($_ENV['TMPDIR']) : false,
			'sgtd' => (function_exists('sys_get_temp_dir')) ? realpath(sys_get_temp_dir()) : false,
			'cwd' => realpath(getcwd()),
			'cfd' => realpath(dirname(__FILE__))
		)));
		foreach ($paths as $key => $path) {
			if (($name = tempnam($path, 'popads-')) && (file_exists($name))) {
				unlink($name);
				if (strcasecmp(realpath(dirname($name)), $path) == 0) {
					if ($this->verbose) print 'T' . $key;
					return $path;
				}
			}
		}
		if ($this->verbose) print 'Terr';
		return false;
	}

	function build_query($query) {
		if ((function_exists('http_build_query')) && ($line = http_build_query($query, '', '&', PHP_QUERY_RFC3986))) {
			return $line;
		}
		/* Especialmente para PHP4 */
		$line = '';
		foreach ($query as $k => $v) {
			$line .= ((strlen($line) > 0) ? '&' : '') . rawurlencode($k) . '=' . rawurlencode($v);
		}
		return $line;
	}

	function format_url() {
		$uri = '/api/website_code?';
		$uric = array(
			'key' => $this->key,
			'website_id' => $this->siteId
		);
		if ($this->minBid > 0)
			$uric['mb'] = $this->minBid;
		if ($this->popundersPerIP > 0)
			$uric['ppip'] = $this->popundersPerIP;
		if ($this->delayBetween > 0)
			$uric['db'] = $this->delayBetween;
		if ($this->defaultPerDay > 0)
			$uric['dpd'] = $this->defaultPerDay;
		if ($this->topmostLayer > 0)
			$uric['tl'] = $this->topmostLayer;
		if ($this->antiAdblock) {
			$uric['aab'] = 1;
			$uric['of'] = 1;
		} else {
			if ($this->obfuscate)
				$uric['of'] = intval($this->obfuscate);
		}
		if (($this->default) && ($decoded_def = ($this->default)))
			$uric['def'] = $decoded_def;
		return $uri . $this->build_query($uric);
	}

	/* versão para fins de depuração */
	function read() {
		if ($this->verbose) print ' ';
		$url = $this->format_url();
		$tmp_dir = $this->tmp_dir();
		if (!$tmp_dir)
			return '';
		$fn = $tmp_dir . '/popads-' . md5($url) . '.js';
		/* Se existe e não mais de um dia , o retorno */
		if (file_exists($fn) && (time() - filemtime($fn) < 86400))
			return file_get_contents($fn);
		if (file_exists($fn . '.lock') && (time() - filemtime($fn . '.lock') < 60))
			{ if ($this->verbose) print 'L'; return ''; }
		print 'A'; $code = $this->get_curl($url);
		if (!$code) { if ($this->verbose) print 'B'; $code = $this->get_fgc($url); }
		if (!$code) { if ($this->verbose) print 'C'; $code = $this->get_fsock($url); }
		if (!$code) { if ($this->verbose) print 'D'; $code = $this->get_sock($url); }
		if (!$code) { if ($this->verbose) print 'E'; $code = ''; }
		if ((!empty($code)) && (strpos($code, '<!-- PopAds.net') !== false)) {
			file_put_contents($fn, $code);
			chmod($fn, 0755);
			clearstatcache(true, $fn);
			return $code;
		} else {
			file_put_contents($fn . '.lock', $code);
			chmod($fn . '.lock', 0755);
			return '';
		}
	}

}

$pad = new PopAdsAdcode();
$pad_code = $pad->read();

error_reporting($pa_orep);

?>
<?php print $pad_code; ?>
