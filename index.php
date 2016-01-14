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
<title>Menu</title>
<style>

body {
    background-repeat: no-repeat;
	background-size: 100%;
}
.t {text-decoration:none; background-color:black; color:white; padding:14px 14px; border-radius: 8px 8px 8px 8px; font-family:'Comic Sans MS', cursive}
.t:hover {background-color:#800; color:white}

</style>

</head>

<body background="/Main Background.jpg">


<img align="left" src="/MainLogo.png" width="260" height="160" />
	


<div align="right" style="margin-top:20px; margin-right:30px">
<img src="/Head Name.png" width="1000" height="140" />
</div>


<div align="center" style="font-family:'Comic Sans MS', cursive; margin:100px; margin-top:20px; font-size:45px; color:#006">
<table cellpadding="40">
<tr><td>
Welcome <strong>Ashar Ali</strong>
</div>
</td>

<td>
	<img style="border: 2px solid black" src="/Friends/3.jpg" width="240" height="240" />
</td>


</tr>


</table>

<div align="left" style="margin-left:300px">
<a class="t" href="/FriendUntitled-1.php" style="font-size:45px; font-family:MOTOR"">Play Now</a>
</div>

</body>
</html>
