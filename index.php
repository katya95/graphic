<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>form</title>
<link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>Figure selection</h2>
<script src="https://unpkg.com/@popperjs/core@2"></script>

<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>

<div class="container">
<form class="form-control" method="post" action="2.php">
  <div class="row">
 <div class="col-sm">
<label for="inputAddress">Figure</label>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  name="nameselect">
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
</div>
 <div class="col-sm">
<label for="inputAddress">Color</label>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  name="color">
 <option value="white">white</option>
 <option value="red">red</option>
 <option value="green">green</option>
 <option value="blue">blue</option>
</select>
</div>
 <div class="col-sm">
<label for="input">Name</label>
<input class="form-control p-2" name='name'  type="text"  value='default' placeholder="Readonly input here..." readonly>
</div>
</div>
<div class="col-sm  pb-3">
<button type="submit" class="btn btn-primary w-25">Sign in</button>
</div>
</form>
</div>

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
<div class="container">
<form method="post" enctype="multipart/form-data">

<div class="row  pb-3">
<label for="exampleFormControlFile1">Example file input</label>
<div class="col-sm">
<input type="file" class="form-control-file" id="" name="file">
</div>
</div>
<button type="submit" class="btn btn-primary w-25">Load file!</button>
</form>
</div>
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
    
    


