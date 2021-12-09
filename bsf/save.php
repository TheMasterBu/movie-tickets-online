<?php
require_once("load.php");
@$time_d = $_POST['t'];
@$name = $_POST['name'];
@$school = $_POST['school'];
@$e = implode( ',',$_POST['e'] );
@$moviename = $_GET['moviename'];
	


$data = array(
		'time_d'	=>	$time_d,
		'name'		=>	$name,
		'school'	=>	$school,
		'e'			=>	$e,
		't'			=>	time()
		);
		insert('list',$data);
//echo ">>".count($_POST['e']);


	for($r=0;$r<count($_POST['e']);$r++){
		$exr = explode(",", $e);
		echo $exr[$r];
		$data2 = array(
			'time_d'	=>	$time_d,
			'num'		=>	$exr[$r],
			'status'	=>	"1"
		);
		insert('seat',$data2);
	}

?>
<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=add.php?time_d=<?=$time_d;?>&name=<?=$name;?>&school=<?=$school;?>&e=<?=$e;?>&moviename=<?=$moviename;?>">