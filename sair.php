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
 
    $user = null;
     
  }
   
  $url = $facebook->getLogoutUrl();
   
}else{
     
  $url = "facebook-login.php";
   
}
 
$facebook->destroySession();
 
header("Location: $url");
?>