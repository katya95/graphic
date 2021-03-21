<?php
session_start();
//ini_set('display_errors', 0);
//ini_set('display_startup_errors', 0);
//error_reporting (0);
use BootstrapPHP\BootstrapPHP;
 
include 'BootstrapPHP/BootstrapPHP.php';
BootstrapPHP::register_autoload();
//include ('config.php');
use BootstrapPHP\Button;
 
// Превый способ (не рекомундуется)
$button = new Button('Текст на кнопке');
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
<!--<script src="https://unpkg.com/@popperjs/core@2" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>-->

<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>

<!-- <button class="btn btn-warning" type="button">Button</button>-->
<div class="container">
<form class="form-control" method="post" action="2.php">
<!--  <div class="form-group row">-->
  <div class="row">
 <div class="col-sm">
<label for="inputAddress">Figure</label>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  name="nameselect">
 <option value="circle">circle</option><!-- окружность-->
 <option value="square">square</option><!--квадрат-->
 <option value="parallelogram">parallelogram</option><!--параллелограмм-->
 <option value="oval">oval</option><!--овал-->
 <option value="dot">dot</option><!--точка-->
 <option value="line">line</option><!--отрезок-->
 <option value="triangle">triangle</option><!--треугольник-->
 <option value="rectangle">rectangle</option><!--прямоугольник-->
 <option value="text">text</option><!--текст-->
</select>
</div>
 <!--  <div class="col-md-6">-->
 <div class="col-sm">
<label for="inputAddress">Color</label>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  name="color">
 <option value="white">white</option>
 <option value="red">red</option>
 <option value="green">green</option>
 <option value="blue">blue</option>
</select>
</div>

<!--<p>Name:<br> -->
 <div class="col-sm">
<label for="input">Name</label>
<!--<input name='name' type='text'  value='default'  readonly></p>-->
<input class="form-control p-2" name='name'  type="text"  value='default' placeholder="Readonly input here..." readonly>
</div>
</div>
<div class="col-sm  pb-3">
<button type="submit" class="btn btn-primary w-25">Sign in</button>
</div>
<!--<INPUT TYPE="submit" name="РћС‚РїСЂР°РІРёС‚СЊ" />-->
</form>
</div>

</body>
</html>
<!--  <img src="image.php"/> -->
<?php 
//function to load image
//use BootstrapPHP\Button;
 
// Превый способ (не рекомундуется)
$button = new Button('Текст на кнопке');
Button::create('Текст на кнопке');
Button::create('Кнопка с заданными атрибутами')
	->attributes->setId('myButton')
	->attributes->addClass('class_1')
	->attributes->addClass(array('class_2', 'class_n'))
	->attributes->addData('name-1', 'value 1')
	->attributes->addData(array('name-2' => 'value 2', 'name-n' => 'value n'));


function can_upload($file)
{
    if($file['name'] == '')
		return 'Р’С‹Р±РµСЂРёС‚Рµ С„Р°Р№Р»';
	if($file['size'] == 0)
		return 'Р Р°Р·РјРµСЂ С„Р°Р№Р»Р° СЃР»РёС€РєРѕРј Р±РѕР»СЊС€РѕР№.';
	$getName = explode('.', $file['name']);
	$m = strtolower(end($getName));
	$types = array('jpg', 'png', 'jpeg');
	if(!in_array($m, $types))
		return 'РќРµРґРѕРїСѓСЃС‚РёРјС‹Р№ С‚РёРї С„Р°Р№Р»Р°.';
	
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
<!-- <div class="form-group">-->
<div class="row  pb-3">
<label for="exampleFormControlFile1">Example file input</label>
<div class="col-sm">
<input type="file" class="form-control-file" id="" name="file">
</div>
</div>
<!--  <input type="submit" value="Load file!">-->
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
    
    


