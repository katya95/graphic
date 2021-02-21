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
 
<form id="my_form">

	<!--  <div class="mar10-tb"><label>Имя: <input name="f[name]"></label></div>
	<div class="mar10-tb"><label>Телефон: <input name="f[phone]"></label></div>
	<div><button type="submit">Отправить</button></div>-->
	
	<!--  <div class="mar10-tb"><label>Имя: <input name="name"></label></div>
	<div class="mar10-tb"><label>Телефон: <input name="phone"></label></div>
	<div><button type="submit">Отправить</button></div> -->
	
	
	<form id="my_form">
	<div class="mar10-tb"><label>x координата центра: <input name="name_center_x"></label></div>
	<div class="mar10-tb"><label>y координата центра: <input name="name_center_y"></label></div>
	<div class="mar10-tb"><label>Ширина окружности: <input name="width"></label></div>
	<div class="mar10-tb"><label>Высота окружности: <input name="height"></label></div>
	<div class="mar10-tb"><label>Угол начала дуги или окружности в градусах: <input name="start_circle_degree"></label></div>
	<div class="mar10-tb"><label>Угол окончания окружости в градусах: <input name="end_circle_degree"></label></div>
	<div><button type="submit">Отправить</button></div>
</form> 
	
</form> 

<div id="my_message"></div>
<?php $_SESSION['figure'] ='circle'; ?>
<script> 
$('#my_form').submit(function(){
	
	$.post(
		//'post.php', // адрес обработчика
			//'index.php',
			'image.php'
			//'1.php',
		 $("#my_form").serialize(), // отправляемые данные  		
		
		function(msg) { // получен ответ сервера  
			$('#my_form').hide('slow');
			$('#my_message').html(msg);
		}
	);
	
	return false;
});
</script> 

 <!--  <script>
 $('#my_form').submit(function(){
	$.post(
		'C:/VTRoot/HarddiskVolume2/Open Server/OSPanel/domains/localhost/graphic/post.php', // адрес обработчика
		 $("#my_form").serialize(), // отправляемые данные  		
		
		function(msg) { // получен ответ сервера  
			$('#my_form').hide('slow');
			$('#my_message').html(msg);
		}
	);
	return false;
});
</script>-->
 
 
<link rel="stylesheet" href="assets/css/-lazy.css">
<link rel="stylesheet" href="assets/css/fontawesome.css">
<!--  </body>-->

<form id="my_form">
	<div class="mar10-tb"><label>x координата центра: <input name="name_center_x"></label></div>
	<div class="mar10-tb"><label>y координата центра: <input name="name_center_y"></label></div>
	<div class="mar10-tb"><label>Ширина окружности: <input name="width"></label></div>
	<div class="mar10-tb"><label>Высота окружности: <input name="height"></label></div>
	<div class="mar10-tb"><label>Угол начала дуги или оружности в градусах: <input name="start_circle_degree"></label></div>
	<div class="mar10-tb"><label>Угол окончания окружости в градусах: <input name="start_circle_degree"></label></div>
	<div><button type="submit">Отправить</button></div>
</form> 
 
<div id="my_message"></div>

</body>
</html>

<?php 
function can_upload($file){
    if($file['name'] == '')
		return 'Выберите файл';
	
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
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
    $a=2;
	//$a = file_get_contents('content2.php');

	$getName = explode('.', $file['name']);
	$mname = strtolower(end($getName));
	$name=$a .'.'. $mname;
	copy($file['tmp_name'], 'foto/' . $name);
	echo '<img src="./foto/'.$name.'" /></img>';
	//$connection->query("UPDATE user SET avatar='$name' WHERE id_user='$a'") ;
	$_SESSION['photo']=$name;
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
      }
    }
    ?>

