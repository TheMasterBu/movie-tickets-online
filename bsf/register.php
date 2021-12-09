<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSF MOVIE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>


<b>
<nav class="navbar navbar-expand-lg navbar-red bg-light ">
  <div class="container-fluid"><b>
    <h2><a href="index.php">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      </button>
    </a><a href="index.php"><img src="images/lk.png" width="80" height="80" alt=""/></a></h2>
    </b>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/index.php">ติดต่อเรา</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</b>


<?php
require_once("load.php");
require_once("func.php");

	

@$time_d = $_POST['t'];
@$name = $_POST['name'];
@$school = $_POST['school'];
@$e = $_POST['e'];
@$moviename = $_GET['moviename'];
@$rong 		= $_GET['rong'];	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>BSF MOVIE</title>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="responsive ">
		<br><b><center><font color="ffffff"><h1>BSF MOVIE</h1></font></center></b><br>
	<div style="width: 90%; margin: 0 auto; background-color: #FFF; border-radius: 20px; padding-top: 10px; padding-bottom: 10px;">
		<?php if(empty($time_d)){?>
		<form method="post"  action="register.php">
				<div class="item">

		
						
			 			<h3>รอบฉาย</h3>
					<div class="radiogroups g-input icon-alarm border">
						
						<label><input name="t" type="radio" value="12" <?php if($time_d=="12"){ echo "checked";} ?> >&nbsp;12.00 น.</label>
						<label><input name="t" type="radio" value="13" <?php if($time_d=="13"){ echo "checked";} ?> >&nbsp;13.00 น.</label>
						<label><input name="t" type="radio" value="14" <?php if($time_d=="14"){ echo "checked";} ?> >&nbsp;14.00 น.</label>
						<label><input name="t" type="radio" value="15" <?php if($time_d=="15"){ echo "checked";} ?> >&nbsp;15.00 น.</label>
						<label><input name="t" type="radio" value="16" <?php if($time_d=="16"){ echo "checked";} ?> >&nbsp;16.00 น.</label>
						<label><input name="t" type="radio" value="17" <?php if($time_d=="17"){ echo "checked";} ?> >&nbsp;17.00 น.</label>
						<label><input name="t" type="radio" value="18" <?php if($time_d=="18"){ echo "checked";} ?> >&nbsp;18.00 น.</label>
						<label><input name="t" type="radio" value="19" <?php if($time_d=="19"){ echo "checked";} ?> >&nbsp;19.00 น.</label>
						<label><input name="t" type="radio" value="20" <?php if($time_d=="20"){ echo "checked";} ?> >&nbsp;20.00 น.</label>
					</div>
				</div>
				<div class="item">
					<h3><label for="register_username"> ชื่อ-สกุล </label></h3>
					<span class="g-input icon-user">
						<input type="text" name="name" value="<?=$name;?>" required="">
					</span>
					<div class="comment invalid" id="result_register_username">Please enter your name</div>
				</div>
				<div class="item">
					<h3><label for="register_username">เบอร์โทรศัพท์</label></h3>
					<span class="g-input icon-phone">
						<input type="number" name="school" value="<?=$school;?>">
					</span>
					<div class="comment invalid" id="result_register_username">Please enter your phone number</div>
				</div>
				
				<fieldset class="center submit"><button class="button save " type="submit">next</button></fieldset>
			
			</form>
		<?php } ?>
			<?php if(!empty($time_d)){?>
				<div style="width: 90%; padding: 20px; font-size: 30px;">
				รอบฉาย : <?=$time_d.".00";?> <br>
				ชื่อ-สกุล : <?=$name;?><br>
				เบอร์โทรศัพท์ : <?=$school;?><br>
	</div>
				
	  </table>
	  <form method="post"  action="save.php">
						<input name="t" type="text" value="<?=$time_d;?>"  hidden="">
						<input type="text" name="name" value="<?=$name;?>"  hidden="">
						<input type="text" name="school" value="<?=$school;?>" hidden="">
						<a name="s2"></a>
			
					<b><br><center><br><h1 class="color-red">เลือกที่นั่ง</h1></center><br></b>
					<p id="pp"></p>
					
					<table class="border center data" width="80%">
						<tr style="height: 80px;">
							
							<?php
								for ($i=30; $i >=26 ; $i--)
									{ ?>
										<td class="center">
											<?php
											$sql_ = select("select * from seat where num='$i' and time_d ='$time_d' ");
											//$chk = $sql_[0];
											if(count($sql_)>0){ ?>
												<img src='images/com.png'><br>
												<?=$i;?>
											<?php }else{ ?>
											<label>
												<img onclick="img('1','<?=$i;?>');" id="<?=$i;?>c" src="images/chair.png">
												<img onclick="img('0','<?=$i;?>');" id="<?=$i;?>s" src="images/select.png" style="display: none;"><br>
												<input name="e[]" type="checkbox" value="<?=$i;?>" hidden="" ><?=$i;?>
											</label>
										<?php } ?>
										</td>
									<?php
									} ?>
							
						</tr>
						<tr style="height: 80px;">
							
						
							<?php
								for ($i=25; $i >=21 ; $i--)
									{ ?>
										<td class="center">
											<?php
											$sql_ = select("select * from seat where num='$i' and time_d ='$time_d'");
											//$chk = $sql_[0];
											if(count($sql_)>0){ ?>
												<img src='images/com.png'><br>
												<?=$i;?>
											<?php }else{ ?>
											<label>
												<img onclick="img('1','<?=$i;?>');" id="<?=$i;?>c" src="images/chair.png">
												<img onclick="img('0','<?=$i;?>');" id="<?=$i;?>s" src="images/select.png" style="display: none;"><br>
												<input name="e[]" type="checkbox" value="<?=$i;?>" hidden="" ><?=$i;?>
											</label> <?php } ?>
										</td>
									<?php
									} ?>
									
						</tr>
						<tr style="height: 80px;">
							
							<?php
								for ($i=20; $i >=16 ; $i--)
									{ ?>
										<td class="center">
											<?php
											$sql_ = select("select * from seat where num='$i' and time_d ='$time_d'");
											//$chk = $sql_[0];
											if(count($sql_)>0){ ?>
												<img src='images/com.png'><br>
												<?=$i;?>
											<?php }else{ ?>
											<label>
												<img onclick="img('1','<?=$i;?>');" id="<?=$i;?>c" src="images/chair.png">
												<img onclick="img('0','<?=$i;?>');" id="<?=$i;?>s" src="images/select.png" style="display: none;"><br>
												<input name="e[]" type="checkbox" value="<?=$i;?>" hidden="" ><?=$i;?>
											</label><?php } ?>
										</td>
									<?php
									} ?>
									
						</tr>
					</table>
					<br>
					<br>
					<table class="border center data" width="80%">
						<tr style="height: 80px;">
						
							<?php
								for ($i=15; $i >=11 ; $i--)
									{ ?>
										<td class="center">
											<?php
											$sql_ = select("select * from seat where num='$i' and time_d ='$time_d'");
											//$chk = $sql_[0];
											if(count($sql_)>0){ ?>
												<img src='images/com.png'><br>
												<?=$i;?>
											<?php }else{ ?>
											<label>
												<img onclick="img('1','<?=$i;?>');" id="<?=$i;?>c" src="images/chair.png">
												<img onclick="img('0','<?=$i;?>');" id="<?=$i;?>s" src="images/select.png" style="display: none;"><br>
												<input name="e[]" type="checkbox" value="<?=$i;?>" hidden="" ><?=$i;?>
											</label> <?php } ?>
										</td>
									<?php
									} ?>
								
							
						</tr>
						<tr style="height: 80px;">
							
							<?php
								for ($i=10; $i >=6 ; $i--)
									{ ?>
										<td class="center">
											<?php
											$sql_ = select("select * from seat where num='$i' and time_d ='$time_d'");
											//$chk = $sql_[0];
											if(count($sql_)>0){ ?>
												<img src='images/com.png'><br>
												<?=$i;?>
											<?php }else{ ?>
											<label>
												<img onclick="img('1','<?=$i;?>');" id="<?=$i;?>c" src="images/chair.png">
												<img onclick="img('0','<?=$i;?>');" id="<?=$i;?>s" src="images/select.png" style="display: none;"><br>
												<input name="e[]" type="checkbox" value="<?=$i;?>" hidden="" ><?=$i;?>
											</label><?php } ?>
										</td>
									<?php
									} ?>
								
						</tr>
						<tr style="height: 80px;">
							
							<?php
								for ($i=5; $i >=1 ; $i--)
									{ ?>
										<td class="center">
											<?php
											$sql_ = select("select * from seat where num='$i' and time_d = $time_d ");
											//$chk = $sql_[0];
											if(count($sql_)>0){ ?>
												<img src='images/com.png'><br>
												<?=$i;?>
											<?php }else{ ?>
											<label>
												<img onclick="img('1','<?=$i;?>');" id="<?=$i;?>c" src="images/chair.png">
												<img onclick="img('0','<?=$i;?>');" id="<?=$i;?>s" src="images/select.png" style="display: none;"><br>
												<input name="e[]" type="checkbox" value="<?=$i;?>" hidden="" ><?=$i;?>
											</label><?php } ?>
										</td>
									<?php
									} ?>
									
						</tr>
					</table>
					
					<br>
				<fieldset class="center submit"><button class=" save button go" type="button" onclick="location.href='register.php'">ยกเลิก</button> <button class="button save " type="submit">บันทึก</button></fieldset>
	  </form>
		<?php } ?>
	
	</body>
</html>