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
 <option value="circle">circle</option><!-- ����������-->
 <option value="square">square</option><!--�������-->
 <option value="parallelogram">parallelogram</option><!--��������������-->
 <option value="oval">oval</option><!--����-->
 <option value="dot">dot</option><!--�����-->
 <option value="line">line</option><!--�������-->
 <option value="triangle">triangle</option><!--�����������-->
 <option value="rectangle">rectangle</option><!--�������������-->
 <option value="text">text</option><!--�����-->
</select>
<select class="form-control" name="color">
 <option value="white">white</option>
 <option value="red">red</option>
 <option value="green">green</option>
 <option value="blue">blue</option>
</select>
<p>Name:<br> 
<input name='name' type='text'  value='default'  readonly></p>
<INPUT TYPE="submit" name="Отправить" />
</form>
</body>
</html>
<!--  <img src="image.php"/> -->
<?php 
//function to load image
function can_upload($file)
{
    if($file['name'] == '')
		return 'Выберите файл';
	if($file['size'] == 0)
		return 'Размер файла слишком большой.';
	$getName = explode('.', $file['name']);
	$m = strtolower(end($getName));
	$types = array('jpg', 'png', 'jpeg');
	if(!in_array($m, $types))
		return 'Недопустимый тип файла.';
	
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
    
    


