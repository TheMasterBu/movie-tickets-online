<?php
require_once("../load.php");
@$time_d 	= $_GET['time_d'];
@$name 		= $_GET['name'];
@$school 	= $_GET['school'];
@$e 		= $_GET['e'];
@$moviename = $_GET['moviename'];

@$sql_ = select("select * from list where name LIKE '%$_GET[search]%' order by id desc");
	//$chk = $sql_[0];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BSF MOVIE</title>
<link rel="shortcut icon" href="">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<body>
<?php
	//echo $resultArray[$e];
	?>
	<center>
<h1 class="color-white" style="padding-top: 30px; padding-bottom: 30px;">BSF MOVIE</h1></center>
	<div style="width: 85%; margin: 0 auto; background-color: #FFFFFF; border-radius: 20px; padding: 10px;">
		
<div class="tablebody">
	<fieldset class=" submit">
	  <button class=" save button" type="button" onclick="location.href='index.php'">Refresh</button>
	  <a href="../index.php">
	  <button class=" save button" type="button" onclick="location.href='index.php'">Back</button>
	  </a>
	</fieldset>

	<table class="fullwidth">
<caption>ทั้งหมด <?=count($sql_);?> รายการ</caption>
<thead>
	<tr>
		<th id="c0" class="center">ที่</th>
		<th id="c1" class="center">ชื่อ</th>
		<th id="c2" class="center">เบอร์โทร์ศัพท์</th>
		<th id="c3" class="center">รอบฉาย</th>
		<th id="c4" class="center">ที่นั่ง</th>
		<th id="c5" class="center" >วันที่จอง</th>
		<th id="c6"></th></tr>
		</thead>
<tbody>
<?php
for($i=0;$i<count($sql_);$i++){
	$data = $sql_[$i];
?>
	<tr id="datatable_244" class="sort">
		<th class="center" data-text="ชื่อ" id="r244" headers="c0"><?=$i+1;?></th>
<th class="center" data-text="ชื่อ" id="r244" headers="c0"><?=$data['name'];?></th>

<td class="center" ><?=$data['school'];?></td>
<td class="center" ><?=$data['time_d'];?>.00 น.</td>
<td class="center" ><?=$data['e'];?></td>
<td class="center" ><?php echo thai_date_and_time($data['t']);?></td>
<td class="buttons" ><a class="button red" href="index.php?del=<?=$data['id'];?>"><span class=" button_w_text"><span class="mobile">ลบ</span></span></a></td>
</tr>
<?php } ?>
</tbody>

</table></div>
	</div><br>

	</body>
</html>
<?php
if(!empty($_GET['del'])){
	$sql_2 = select("select * from list where id=$data[id]");
	$mm=$sql_2[0];

	for($r=0;$r<count($mm);$r++){
		$exr = explode(",", $mm['e']);
		echo $exr[$r]."<br>";
		$sql = "DELETE FROM seat WHERE num=$exr[$r] and time_d=$data[time_d]";
		$mysqli->query($sql);
		//delete('seat','num='.$exr['$r'] );
	}

	delete('list',"id= $_GET[del]");
	?>
	<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=index.php">
	<?php
}
?>