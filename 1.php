<?php
session_start(); 
?>
<!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>Отправка формы на AJAX</title>
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>Первая форма</h2>
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
<select class="form-control" name="format">
 <option value="jpg">jpg</option>
 <option value="png">png</option>
</select>
<p>Name:<br> 
<input name='name' type='text'  value='default' /></p>
<p>Picture Width:<br> 
<input name='PictureWidth' type='text'  value='' /></p>
<p>Picture Height:<br> 
<input name='PictureHeight' type='text'  value='' /></p>
<INPUT TYPE="submit" name="Отправить" />
</form>
</body>
</html>
<!--  <img src="image.php"/> -->
<?php 


function can_upload($file){
    if($file['name'] == '')
		return 'Выберите файл';
	

	if($file['size'] == 0)
		return 'Размер файла слишком большой.';
	
	$getName = explode('.', $file['name']);
	$m = strtolower(end($getName));
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

	if(!in_array($m, $types))
		return 'Недопустимый тип файла.';
	
	return true;
  }

  function make_upload($file){	
  // $a=2;
   $a=$file['name'];
  //  $a=ungid('');
	//$a = file_get_contents('content2.php');

	$getName = explode('.', $file['name']);
	$mname = strtolower(end($getName));
	$name=$a .'.'. $mname;
	copy($file['tmp_name'], 'foto/' . $name);
	echo '<img src="./foto/'.$name.'" /></img>';
	if (isset($a)){
	$_SESSION['photo'] =$name;
	}
	else {$_SESSION['photo'] ='';}
	//$_SESSION['pach']=dirname($file);
	$_SESSION['pach']="foto/";
	//$_SESSION['name_photo']=$file['name'];
	$_SESSION['name_photo']=$a;
	echo $_SESSION['photo'];
	//$connection->query("UPDATE user SET avatar='$name' WHERE id_user='$a'") ;
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
      }
      else{
        echo "<strong>$c</strong>";  
        //$_SESSION['photo'] ='';
      }
    }
    
   
    ?>
    
    
  <!--  <form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="f">
<input type="submit"
value="���������">
</form>  -->
<?php 
/*if (isset($_FILES["f"]) and isset($_FILES["f"]["name"])and $_FILES["f"]["error"] == 0){
$fnam=basename($_FILES["f"]["name"], ."jpg");
$fPath = "foto/".$fnam;
move_uploaded_file($_FILES["f"]["tmp_name"], $fPath);
$src = imagecreatefromjpeg($fPath);
$sx = imagesx($src);
$sy = imagesy($src);
}

if
(function_exists("imagecreatetruecolor")) {
$img = imagecreatetruecolor($imW,
$imH); }
else {
$img = imagecreate($imW, $imH); }
imagecopyresampled($img, $src, 0, 0, 0, 0, $imW, $imH, $sx, $sy);*/
?>
  