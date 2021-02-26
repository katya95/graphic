<?php
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting (0);
?>
<!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>form</title>
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>Figure selection</h2>
<form method="post" action="2.php">

<select class="form-control" name="nameselect">
 <option value="circle">circle</option><!-- îêðóæíîñòü-->
 <option value="square">square</option><!--êâàäðàò-->
 <option value="parallelogram">parallelogram</option><!--ïàðàëëåëîãðàìì-->
 <option value="oval">oval</option><!--îâàë-->
 <option value="dot">dot</option><!--òî÷êà-->
 <option value="line">line</option><!--îòðåçîê-->
 <option value="triangle">triangle</option><!--òðåóãîëüíèê-->
 <option value="rectangle">rectangle</option><!--ïðÿìîóãîëüíèê-->
 <option value="text">text</option><!--òåêñò-->
</select>
<select class="form-control" name="color">
 <option value="white">white</option>
 <option value="red">red</option>
 <option value="green">green</option>
 <option value="blue">blue</option>
</select>
<p>Name:<br> 
<input name='name' type='text'  value='default'  readonly></p>
<INPUT TYPE="submit" name="ÐžÑ‚Ð¿Ñ€Ð°Ð²Ð¸Ñ‚ÑŒ" />
</form>
</body>
</html>
<!--  <img src="image.php"/> -->
<?php 
//function to load image
function can_upload($file)
{
    if($file['name'] == '')
		return 'Ð’Ñ‹Ð±ÐµÑ€Ð¸Ñ‚Ðµ Ñ„Ð°Ð¹Ð»';
	if($file['size'] == 0)
		return 'Ð Ð°Ð·Ð¼ÐµÑ€ Ñ„Ð°Ð¹Ð»Ð° ÑÐ»Ð¸ÑˆÐºÐ¾Ð¼ Ð±Ð¾Ð»ÑŒÑˆÐ¾Ð¹.';
	$getName = explode('.', $file['name']);
	$m = strtolower(end($getName));
	$types = array('jpg', 'png', 'jpeg');
	if(!in_array($m, $types))
		return 'ÐÐµÐ´Ð¾Ð¿ÑƒÑÑ‚Ð¸Ð¼Ñ‹Ð¹ Ñ‚Ð¸Ð¿ Ñ„Ð°Ð¹Ð»Ð°.';
	
	return true;
  }

 function make_upload($file)
 {	
   	$a=$file['name'];
	$getName = explode('.', $file['name']);
	$mname = strtolower(end($getName));
	$name=$a .'.'. $mname;
	copy($file['tmp_name'], 'foto/' . $name);
	echo '<img src="./foto/'.$name.'" /></img>';
	if (isset($a)){
		$_SESSION['photo'] =$name;
	}
	else {
		$_SESSION['photo'] ='';}
		$_SESSION['pach']="foto/";
		$_SESSION['name_photo']=$a;
}

?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="Load file!">
</form>
<?php

if(isset($_FILES['file'])) {
 	$c = can_upload($_FILES['file']);
if($c === true){
	make_upload($_FILES['file']);
	echo "<strong>file uploaded successfully!</strong>";
} else{
	echo "<strong>$c</strong>";  
	}
}
    
    ?>
    
    


