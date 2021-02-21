<?php 
session_start(); 

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
	$_SESSION['pach']=$file;
	$_SESSION['name_photo']=$file['name'];
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
    