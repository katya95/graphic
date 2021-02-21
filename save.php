<?php
session_start();
?>
 <form action="image.php" method='POST' accept-charset="utf-8">
<!--  <form id="form">-->
            <p>Name :<br> 
            <input name='name' type='text'  value='' /></p>
            
            <input type='submit' value='Сохранить' name="submit">
            </form>
            
<?php 
  if(isset($_POST['submit'])) {
     $bam=TRUE;
     $_SESSION['save']=1;
    } else {
 	$bam=FALSE;
  	$_SESSION['save']=0;
}

//check();
/*echo 	$_SESSION['save'];
include_once 'config.php';
include_once 'processing.php';
$db=new DB();
$figure_save=new Figure($db);
$figure_save->parameterImage();
$save_image=random_int(100, 999);
$figure_save->setImage($save_image.'.jpg');
//imagejpeg($img,'image/'.$save_image.'.jpg',100);
$figure_save->savePicture();

echo $figure_save->getName();
echo $figure_save->getData();
echo $figure_save->getPatch();
echo $figure_save->getImage();
$figure_save->check();*/
?>