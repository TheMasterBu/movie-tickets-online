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
  <div class="container-fluid">
    <b>
    <h1><a href="index.php">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    </a></h1>
    <h1><a href="index.php"><img src="images/lk.png" width="80" height="80" alt=""/></a><br>
    </h1>
    </b>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
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
		<br><center><font color="ffffff"><h1><b>BSF MOVIE</b></h1></center>
		<div style="width: 85%; margin: 0 auto; padding: 5px; font-size: 20px;">
<span class="color-red"><u><b><h9>กรุณากดชื่อหนังด้านล่าง</h9></b></u></span><br></div>
		  </font>
		  <font color="ffffff">
	      </font><font color="ffffff">
		  </font><font color="ffffff">	      </font>
		  <center> <table width="1029" height="960" border="1">
	        <tbody>
				
	          <tr>
	            <td align="center"><img src="images/s.jpg" width="307" height="423" alt=""/></a></td>
	            <td align="center"><img src="images/free.jpg" width="315" height="426" alt=""/></a></td>
	            <td align="center"><img src="images/v.jpg" width="316" height="429" alt=""/></a></td>
	            <td align="center"><img src="images/kk.jpg" width="318" height="427" alt=""/></a></td>
				<td align="center"><img src="images/sp.jpg" width="318" height="427" alt=""/></a></td>
              </tr>
			 
	          <tr>
	            <td align="center"><h3><strong><a href="register.php">SNAKE EYES</a></strong></h3></p>
	              <iframe width="250" height="150" src="https://www.youtube.com/embed/QAiEBtOP4vM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            &nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">FREE GUY</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/_ZEnpA8Qtoo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
				<td align="center"><h3><strong>
				<p><a href="register.php">แวนการ์ด</a></strong></h3></p>
			    <iframe width="250" height="150" src="https://www.youtube.com/embed/df8bqJlnb4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">FINDING OHANA</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/FTqLUEpWqEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
				<td align="center"><h3><strong>
				<p><a href="register.php">SPACE JAM</a></strong></h3></p>
			    <iframe width="250" height="150" src="https://www.youtube.com/embed/0H2cIbUGJJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td> 
	            
              </tr>
	          <tr>
	            <td align="center"><img src="images/j.jpg" width="307" height="423" alt=""/></a></td>
	            <td align="center"><img src="images/b.jpg" width="307" height="423" alt=""/></a></td>
	            <td align="center"><img src="images/m.jpg" width="307" height="423" alt=""/></a></td>
	            <td align="center"><img src="images/w.jpg" width="307" height="423" alt=""/></a></td>
				<td align="center"><img src="images/ra.jpg" width="318" height="427" alt=""/></a></td>  
              </tr>
	          <tr>
				  
	            <td align="center"><h3><strong>
	            <p><a href="register.php">Jungle Cruise</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/bYkxi5oHq7g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">NO TIME TO DIE</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/tdtuHjjX2x4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">MORTAL COMBAT</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/NYH2sLid0Zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">BLACK WIDOW</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/kteX1JAE2iw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
				<td align="center"><h3><strong>
				<p><a href="register.php">RAYA</a></strong></h3></p>
			    <iframe width="250" height="150" src="https://www.youtube.com/embed/1VIZ89FEjYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>  
              </tr>
	          <tr>
	            <td align="center"><img src="images/c.jpg" width="307" height="423" alt=""/></a></td>
	            <td align="center"><img src="images/k.jpg" width="307" height="423" alt=""/></a></td>
	            <td align="center"><img src="images/f.jpg" width="307" height="423" alt=""/></a></td>
	            <td align="center"><img src="images/t.jpg" width="307" height="423" alt=""/></a></td>
				<td align="center"><img src="images/lu.jpg" width="318" height="427" alt=""/></a></td>  
              </tr>
	          <tr>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">SHANG-CHI</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/OvnLbNeTAIg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">โครตคนชนเอเลียน</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/yqmnKVSJitc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">FAST &amp; FURIOUS 9</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/37zP-XE16gc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
	            <td align="center"><h3><strong>
	            <p><a href="register.php">BOSS BABY 2</a></strong></h3></p>
                <iframe width="250" height="150" src="https://www.youtube.com/embed/EWizz52lZvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>
				<td align="center"><h3><strong>
				<p><a href="register.php">LUCA</a></strong></h3></p>
			    <iframe width="250" height="150" src="https://www.youtube.com/embed/0hgHY9k-44U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;</td>  
              </tr>
            </tbody>
          </table>
	      <font color="ffffff">
	      <p>&nbsp;</p>
	      </font><font color="ffffff">
	      </font>
		  </center>
		<br>
		<tr>

</body>
</html>