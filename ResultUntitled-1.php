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
<title>Result</title>
<style>

body {
    background-repeat: repeat;
	background-size: 100%;
}

.rating > span:hover:before {
   content: "\2605";
   position: absolute;
}

.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}

.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}

.t {text-decoration:none; background-color:#003; color:white; padding:10px 10px; border-radius: 8px 8px 8px 8px; font-family:'Comic Sans MS', cursive}
.t:hover {background-color:#800; color:white}


</style>

</head>

<body background="/Main Background.jpg">


<img align="left" src="/MainLogo.png" width="260" height="160" />
	


<div align="right" style="margin-top:20px; margin-right:30px">
<img src="/Head Name.png"  width="700" height="120" />
</div>


<div align="center" style="font-family:MOTOR; margin:200px; margin-bottom:50px; margin-top:20px; font-size:45px; color:#006">

	<fieldset style="background-color:white; border-radius:15px"/><legend ><img style="border:2px solid black" src="/Friends/1.jpg" width="120" height="120" /></legend>
    
    <img src="/result.jpg" width="900" height="500" />

 <br />
    <a class="t" href="/index.php" style="font-size:30px; font-family:MOTOR"">Post on Facebook</a> <a class="t" href="/index.php" style="font-size:30px; font-family:MOTOR"">Rate Again</a>
</div>

</body>
</html>
