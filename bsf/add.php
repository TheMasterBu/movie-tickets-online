<?php
require_once("load.php");
@$time_d 	= $_GET['time_d'];
@$name 		= $_GET['name'];
@$school 	= $_GET['school'];
@$e 		= $_GET['e'];
@$moviename = $_GET['moviename'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>BSF MOVIE</title>
<link rel="shortcut icon" href="">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="responsive ">
	<?php
	//echo $resultArray[$e];
	?>
	<center><h1 class="color-white" style="padding-top: 20px; padding-bottom: 20px;">BSF MOVIE</h1></center>
	<div style="width: 90%; margin: 0 auto; background-color: #FFF; border-radius: 20px; padding-top: 5px; padding-bottom: 5px;">
		<div style="width: 98%; margin: 0 auto; padding: 20px; font-size: 26px;">
		<div style="width: 93%; margin: 0 auto; padding: 5px; font-size: 20px;">
<span class="color-red"><h9>กรุณาเลือกหนัง</h9></span><br></div>
		<select name-"gender">
<option value="">เลือกหนัง</option>
<option value="SNAKE EYES"> SNAKE EYES </option>
<option value="FREE GUY"> FREE GUY </option>
<option value="แวนการ์ด"> แวนการ์ด </option>
<option value="FINDING OHANA"> FINDING OHANA </option>
<option value="SPACE JAM"> SPACE JAM </option>
<option value="Jungle Cruise"> Jungle Cruise </option>
<option value="NO TIME TO DIE"> NO TIME TO DIE </option>
<option value="MORTAL COMBAT"> MORTAL COMBAT </option>
<option value="BLACK WIDOW"> BLACK WIDOW </option>
<option value="RAYA"> RAYA </option>
<option value="SHANG-CHI"> SHANG-CHI </option>
<option value="โครตคนชนเอเลียน"> โครตคนชนเอเลียน </option>
<option value="FAST & FURIOUS 9"> FAST & FURIOUS 9</option>
<option value="BOSS BABY 2"> BOSS BABY 2 </option>
<option value="LUCA"> LUCA </option>
</select><br>
		รอบฉาย : <?=$time_d.".00 น.";?><br>
		ชื่อ : <?=$name;?><br>
		โทรศัพท์ : <?=$school;?><br>
	
	</div>
	<div class="center" style="width: 50%; margin: 0 auto; padding: 20px; font-size: 30px;">
				
		เลขที่นั่ง  <br><font style="font-weight: bold; font-size: 80px;"><?=$e;?></font>
	</div>
	<center><span class="color-red">กรุณาแคปภาพหน้าจอ เพื่อใช้ยืนยันกับเจ้าหน้าที่</span></center>
		<fieldset class="center submit"><button class=" save button" type="button" onclick="location.href='index.php'">เสร็จสิ้น</button></fieldset>
		
	<print="$moviename">
	</body>
</html>
