<?php

session_start();
require_once __DIR__ . '/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php';
require_once __DIR__ . '/facebook-php-sdk-v4-5.0.0/src/Facebook/Facebook.php';

$fb = new Facebook\Facebook([
  'app_id' => '992914187438109',
  'app_secret' => 'b0c6976b991c06a1f099baada876315f',
  'default_graph_version' => 'v2.4',
]);

$token='CAAOHDNlvSB0BAADCPM6iZCyZAb0kmy25i2onsga6jZCVlsekGgp4a207tOuuUfFli3MEQXLqoP5083XASsKZA2yRE0blTKIvNjCOteP4oN54mjjMBxzLI3Dzj97GXu1iC1LTcN2vegawwTDbHrSdeStGrNaQCxtXKZCByGphfAEvzOgrX7wyN5MEyTQTMhLYMV17gVa42vwZDZD';
$fb->setDefaultAccessToken($token);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Friends</title>
<style>

body {
    background-repeat: repeat;
	background-size: 100%;
}

</style>

</head>

<body background="/Back.jpg">


<img align="left" src="/MainLogo.png" width="260" height="160" />
	


<div align="right" style="margin-top:20px; margin-right:30px">
<img src="/Head Name.png" width="1000" height="140" />
</div>


<div>

	<div align="center" style="font-family:'Comic Sans MS', cursive; margin:100px; margin-top:40px; font-size:45px; color:#006">
    
    <fieldset/><legend><strong>Ashar select a Friend</strong></legend>
	
    <table cellpadding="5">
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/1.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="ArsalUntitled-1.php" style="text-decoration:none; font-size:20px; color:black">Arsal Munir</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/2.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Hassan Abdur Rauf</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/4.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Sameer Rana</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/5.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Muhammad Ahmed</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/6.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Muhammad Anas</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/7.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Zain Qadir</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/8.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Talha Mehmood</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/9.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Zeeshan Akhtar</a></strong></td>
    </tr>
    
    <tr>
    	<td><a href="#"><img style="border:2px solid black" src="/Friends/10.jpg" width="70" height="70" /></a></td><td></td><td></td><td><strong><a href="#" style="text-decoration:none; font-size:20px; color:black">Ahmad Rana</a></strong></td>
    </tr>
    
    </table>
    
    
    </div>
</div>



</body>
</html>
