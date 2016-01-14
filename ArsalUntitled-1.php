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
<title>Questionnaire</title>
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
<img src="/Head Name.png" width="1000" height="140" />
</div>


<div align="center" style="font-family:MOTOR; margin:100px; margin-top:20px; font-size:20px; color:#006">

	<fieldset style="background-color:#EDE4C9; border-radius:15px"/><legend ><img style="border:2px solid black" src="/Friends/1.jpg" width="120" height="120" /></legend>
    
    <img src="Capture.PNG" />
    <table cellpadding="5" style=" border-radius:15px;font-size:24px; color:#000">
    
    
    <tr>
    	<td style="font-size:20px">
        	How attractive is this person ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    <tr>
    	<td style="font-size:20px">
        	How logically he is ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    <tr>
    	<td style="font-size:20px">
        	How much he/she follows his heart ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    <tr>
    	<td style="font-size:20px">
        	How practical he is ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    <tr>
    	<td style="font-size:20px">
        	He find it easy even when there is some pressure ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    <tr>
    	<td style="font-size:20px">
        	How much he usually highly motivated and energetic ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    <tr>
    	<td style="font-size:20px">
        	How much he relatively reserved ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    <tr>
    	<td style="font-size:20px">
        	How much he/she is social ?
        </td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>
        	<div class="rating">
				<span style="font-size:50px">☆</span><span style="font-size:44px">☆</span><span style="font-size:38px">☆</span><span style="font-size:32px">☆</span><span style="font-size:25px">☆</span>
			</div>
        </td>
    </tr>
    
    
    </table>
    
    <br />
    <a class="t" href="/ResultUntitled-1.php" style="font-size:30px; font-family:MOTOR">SUMBIT</a>

</div>



</body>
</html>
