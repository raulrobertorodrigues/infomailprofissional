<?php
 
require 'facebook/src/facebook.php';
 
$facebook = new Facebook(array(
 'appId'  => '184454438624116',
 'secret' => '653a49335a20ea5755ff66be27b05eaa',
));
 
 
$user = $facebook->getUser();
 
if ($user) {
     
  try {
       
    $user_profile = $facebook->api('/me');
     
  } catch (FacebookApiException $e) {
       
    error_log($e);
    $user = null;
     
  }
   
  $url = "sair.php";
   
}else {
     
  $url = $facebook->getLoginUrl(array(
        'scope' => 'email'
        ));
   
}
 
 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login Facebook</title>
  </head>
  <body>
  <pre>
    <?php 
        if($user){
             
            print_r($user_profile);
            echo '<a href="'. $url . '">Sair</a>';  
             
        }else{
             
            echo '<a style="text-decoration:none; class="btn btn-primary btn-block" "href="'. $url . '">Login Facebook</a>';    
             
        }
    ?>
  </pre>
  </body>
</html>