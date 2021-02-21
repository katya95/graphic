<?php
session_start();
include_once 'processing.php';
include_once 'config.php';
$db = new DB();
$figure=new Figure($db);
//$_SESSION['flag']=false;
//include 'processing.php';
//$circle=new  Circle();
//$circle->createCircle();
/*if ($_SESSION['figure'] ='circle';){
$db = new DB();
$post=new ModelCircle($db);
$post->getCircle();//получить массив переданных постом параметров
}*/
//$img1 = imagecreatetruecolor(300,300);
//$img = imagecreatefromjpeg('foto/'.$_SESSION['photo']);
$image='2.jpg';
$path='foto/';
if (is_dir($path)==false){
mkdir($path);
$img1 = imagecreatetruecolor(300,300);
imageJPEG($img1,$path."2.jpg",100);
//$img1 = imagecreatetruecolor($figure->getPictureWidth(),$figure->getPictureHeight());

}
//$image='3.jpg';
$img = imagecreatefromjpeg('foto/2.jpg');
$figure->setPatch($path);

$figure->setImage($image);
$figure->setFormatImg($figure->getPatch().$figure->getImage());
//$percent = 0.5;
$width = imagesx($img);
$height = imagesy($img);
//list($width, $height) = getimagesize($img);
//$new_width = $width * $percent;
//$new_width =300;
//$new_height=400;
//$new_height = $height * $percent;
//$image_p = imagecreatetruecolor($new_width, $new_height);
//imagecopyresampled($image_p, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
echo $_SESSION['photo'];





//header("Content-Type:image/jpeg");
//imagejpeg($img,NULL,100);
//$im1 = imagecreatefromjpeg('foto/3.jpg');
//$im1 = imagecreatefromjpeg('foto/2.jpg');

//$photo1=$_SESSION['photo'];
//if ($_SESSION['photo']==$photo1){
//if ($_SESSION['photo']!=''){//если в сессии что-то есть, то выполн€ть  setFormatImg('foto/'.$_SESSION['photo'])   patch-тоже передать   (getPatch().$_SESSION['photo'])
if (!empty($_SESSION['photo'])){
$path=$figure->setPatch($_SESSION['pach']);
$figure->setImage($_SESSION['photo']);
$figure->setFormatImg($figure->getPatch().$figure->getImage());



//$im=new Image($figure);
//$img=$figure->setPatch($_SESSION['pach']).$figure->setImage($_SESSION['photo']);
//$figure='circle';
//$im->setElement($img,$figure);
//$path=
//$_SESSION['temp_img']=$figure->getImage();
 //$_SESSION['temp_path']=$figure->getPatch();
//если нова€ картинка не загружена, загружаем старую измененную. ≈сли такой нет, например дл€ нового пользовател€, картинка по умолчанию.
//каждый раз каждое действие сохран€ем 111.jpg и в этой директории есть по умолчанию картинка

//$img = imagecreatefromjpeg('foto/'.$_SESSION['photo']);
}
else if(empty($_SESSION['photo'])){
//else if($_SESSION['photo']==''){
//$im1 = imagecreatefromjpeg('1.jpg');
//$img = imagecreatefromjpeg('foto/2.jpg');



//если открываетс€ впервый раз, то фото/2 или создать новое иначе из Ѕƒ
$image='2.jpg';
$path='foto/';
$figure->setPatch($path);
$figure->setImage($image);
 $figure->setFormatImg($figure->getPatch().$figure->getImage());
 
if (isset($_SESSION['existing'])){
	$path=$figure->setPatch($figure-> getPathSave());
	$image=$figure->setImage($figure->getPictureSave());
	$figure->setFormatImg($path.$image);
}
 //$img=$figure->getPatch().$figure->getImage();
//$figure='circle';
//$im->setElement($img,$figure);
// $_SESSION['temp_img']=$figure->getImage();
 //$_SESSION['temp_path']=$figure->getPatch();
 //$figure->setImage($image);
//$figure->setFormatImg($img);
//по умолчанию
}
/*else if ($_SESSION['photo']!=$photo1){
$photo1=$_SESSION['photo'];
$im1 = imagecreatefromjpeg($photo1);
}*/

//$im1=imagecreatefromjpeg($_SESSION['photo'] );
//header("Content-Type:image/jpeg");
//imagejpeg($im1,NULL,100);
//$width = imagesx($im1);
//$height = imagesy($im1);
//$white = imagecolorallocate($img,255,255,255);
//$red = imagecolorallocate($img,255,0,0);
//$green = imagecolorallocate($img,0,255,0);
//$blue = imagecolorallocate($img,0,0,255);
//imagefilledrectangle($img,0,0,300,300,$blue);
//include_once 'processing.php';
//include_once 'config.php';
//$db = new DB();
//$figure=new Figure($db);
$figure->color();
//$figure->setColor('white');
if ($_SESSION['figure']=='circle'){
 //if ($figure->getFigure()=='circle'){
$circle=new  Circle($db);
$circle->createCircle();
//$new_figure=$circle->setFigure('circle');
$new_figure='circle';
//$circ=new Image ($new_figure);
//$img=$figure->getPatch().$figure->getImage();
//$circ-> setElement($img);
//$circle->color();
$fig=new Image($new_figure);
$fig->setElement();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$circle->getColor());
imagearc($figure->getFormatImg(),$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$figure->getColor());
$circle->draw();
 }
// imagearc($figure->getFormatImg(),$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$figure->getColor());
 if ($_SESSION['figure']=='square'){
 // if ($figure->getFigure()=='square'){
$square=new Rectangle($db);
$square->createRectangle();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$white);
//$square->color();
//$rectangle->getTopRightX();
//imagerectangle($img,80,60,240,180,$white);
imagerectangle($figure->getFormatImg(),$rectangle->getTopRightX(),$rectangle->getTopRightY(),$rectangle->getBottomLeftX(),$rectangle->getBottomLeftY(),$figure->getColor());





 }
 if ($_SESSION['figure']=='parallelogram'){
 //if ($figure->getFigure()=='parallelogram'){
$parallelogram=new  Parallelogram($db);
$parallelogram->createParallelogram();


 $points = array(
 		$parallelogram->getX6(),$parallelogram->getY6(),
 		$parallelogram->getX5(),$parallelogram->getY5(),
 		$parallelogram->getBottomLeftX(),$parallelogram->getBottomLeftY(),
 		$parallelogram->getX4(),$parallelogram->getY4()
 		);
 
//imagefilledpolygon($img,$points,6,$white);
imagepolygon($figure->getFormatImg(),$points,4,$figure->getColor());

 }
 if ($_SESSION['figure']=='oval'){
  //if ($figure->getFigure()=='oval'){
//$circle=new  Circle($db);
//$circle->createCircle();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$white);
$circle=new  Circle($db);
$circle->createCircle();
//$circle->color();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$circle->getColor());
imagearc($figure->getFormatImg(),$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$figure->getColor());
//imagearc($figure->getFormatImg(),$circle->getCircle(),$figure->getColor());

 }
 if ($_SESSION['figure']=='dot'){
 //if ($figure->getFigure()=='dot'){
//$circle=new  Circle();
//$circle->createCircle();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$white);
$dot=new Dot($db);
$dot->createDot();
//$dot->color();
imagesetpixel($figure->getFormatImg(),$dot->getX(),$dot->getY(),$figure->getColor());




 }
 if ($_SESSION['figure']=='line'){
 //if ($figure->getFigure()=='line'){
//$circle=new  Circle();
//$circle->createCircle();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$white);
$line=new Line($db);
$line->createLine();
$line->color();
imageline($figure->getFormatImg(),$line->getRightX(),$line->getRightY(),$line->getLeftX(),$line->getLeftY(),$figure->getColor());


 }
 if ($_SESSION['figure']=='triangle'){
  //if ($figure->getFigure()=='triangle'){
//$circle=new  Circle();
//$circle->createCircle();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$white);


$triangle=new Triangle($db);
$triangle->createTriangle();
$triangle->color();
$points = array(
 $triangle->getFirstX(),$triangle->getFirstY(),
 $triangle->getSecondX(),$triangle->getSecondY(),
 $triangle->getThirdX(),$triangle->getThirdY()
 );
 
//imagefilledpolygon($img,$points,6,$white);
imagepolygon($figure->getFormatImg(),$points,3,$figure->getColor());




 }
 if ($_SESSION['figure']=='text'){
 // if ($figure->getFigure()=='text'){
 
 $text=new Text($db);
$text->createText();
$text->color();

//$circle=new  Circle();
//$circle->createCircle();
//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$white);
$string = $text->getText();
imagefttext ($figure->getFormatImg(),$text->getSize(),0,$text->getX(),$text->getY(),$figure->getColor(),$text->getFont(),$string);
//imagechar($figure->getFormatImg(),5,150,200,$string,$text->color());



 }
//include_once 'set.php';
/*if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
		//$this-> setPasswordActive($_POST['name_center_x']);
		
		//$password=1;
		$x2=is_int( $_POST['name_center_x']);
	} else{
		//$password=0;
	}*/
	$x2=is_int( $_POST['name_center_x']);
//imagejpeg($im1,NULL,100);
	//$x=intval($_POST['name_center_x']);
	//$y=intval($_POST['name_center_y']);
	//$x2=settype($_POST['name_center_x'], "integer");
	$y2=settype($_POST['name_center_y'], "integer");
	//echo gettype ($y2);
	//$figure=new Figure();
//$figure->color();
imagearc($figure->getFormatImg(),150,150,300,300,0,360,$figure->getColor());
//imagearc($img,150,150,300,300,0,360,$white);
//imagearc($img,$x2,$y2,100,100,0,360,$white);
//if ($figure->getFigure()=='rectangle'){
if ($_SESSION['figure']=='rectangle'){
$rectangle=new Rectangle($db);
$rectangle->createRectangle();
$rectangle->color();
//$rectangle->getTopRightX();
//imagerectangle($img,80,60,240,180,$white);
imagerectangle($figure->getFormatImg(),$rectangle->getTopRightX(),$rectangle->getTopRightY(),$rectangle->getBottomLeftX(),$rectangle->getBottomLeftY(),$figure->getColor());
$new_figure='rectangle';
//$circ=new Image ($new_figure);
//$img=$figure->getPatch().$figure->getImage();
//$circ-> setElement($img);
//$circle->color();
$fig=new Image($new_figure);
$fig->setElement();

}
imagearc($figure->getFormatImg(),150,150,500,500,0,360,$white);
//	$circle->setCentreX($_POST['name_center_x']+0);
//	$circle-> setCentreY($_POST['name_center_y']+0);
//	$circle->setWidth($_POST['width']+0);
//	$circle->setHeight($_POST['height']+0);
//	$circle->setStartDegree($_POST['start_circle_degree']+0);
//	$circle->setEndDegree($_POST['end_circle_degree']+0);//формат данных проверить
//imagearc($img,$circle->getCentreX(),$circle->getCentreY(),$circle->getWidth(),$circle->getHeight(),0,360,$white);
//$u=0;
//$y=0;
//$y=$circle->getCentreY();
//$u=$_SESSION['setCentreX'];
//imagearc($img,$u,$y,111,111,0,360,$white);

//imagearc($img,$_POST['name_center_x'],$_POST['name_center_y'],$_POST['width'],$_POST['height'],$_POST['start_circle_degree'],$_POST['end_circle_degree'],$white);

imagearc($figure->getFormatImg(),100,100,50,50,0,360,$white);
imagearc($figure->getFormatImg(),200,100,50,50,0,360,$white);
imagearc($figure->getFormatImg(),150,200,150,100,25,155,$white);

$string = "World";
//imagechar($img,5,150,200,$string,$white);
//imagecharup($img,5,150,200,$string,$white);

$arr = array(array(1,2,1),array(-1,1,1),array(0,0,-1));
//imageconvolution($img,$arr,5,200);

/*$points = array(
 40,50,
 20,240,
 60,60,
 240,20,
 50,40,
 10,10
 );*/
 
 $points = array(
 40,50,
 20,240,
 60,60
 );
 
//imagefilledpolygon($img,$points,6,$white);
imagepolygon($figure->getFormatImg(),$points,3,$white);
imageline($figure->getFormatImg(),80,80,180,180,$white);
//imagecopy($img,$im1,100,200,180,0,200,100);
//$save_image=0;
$_SESSION['photo']='';
//$figure->setPatch('image/');
//imagecopymerge($img,$im1,100,200,180,0,200,100,50);
//imagecopyresampled($img,$im1,10,10,0,0,210,150,$width,$height);



//header("Content-Type:image/jpeg");
//$figure->saveImage();



//imagejpeg($figure->getFormatImg(),NULL,100);
//imagejpeg($image_p, null, 100);


//$figure->outputImage();
//$a=random_int(100, 999);
//$a="2.jpg";
//imagejpeg($img,'foto/'.$a,100);



//include_once 'save.php';
$_SESSION['save']=1;
if ( $_SESSION['save']==1){
//$db = new DB();
//$figure_save=new Figure($db);
$figure->parameterImage();
//$data=date("m.d.y");
//$data=date('Y-m-d H:i:s');
		//$figure_save->setData($data);
		//$figure_save->setPatch('foto/');
	//	$figure_save->setName($_POST['name']);
//$figure->setImage('2.jpg');
//$figure_save->setPatch('foto/');
//$figure->saveImage();
//$figure->setName($_POST['name']);
//$figure->setPatch();
$save_image=random_int(100, 999);



		//$format=$figure_save->getFormatPicture();



//$figure_save->setImage($save_image.'.jpg');
$figure->setImage($save_image.'.jpg');
//header("Content-Type:image/jpeg");
//imagejpeg($img,NULL,100);
//imagejpeg($img,'image/'.$save_image.'.jpg',100);
$figure->saveImage();
$_SESSION['existing']=true;
//$figure->parameterImage();
echo $figure->getImage();
echo $figure->getData();
echo $figure->getPatch();
echo $figure->getName();
echo $_POST['name'];
$figure->savePicture();
// $_SESSION['save']=0;
 //$_SESSION['flag']=true;
 $img=$figure->getPictureSave();
$path=$figure->getPathSave();
echo $path.$img;
//echo '<img src="image.php"/>';
echo '<img src="'.$path.$img.'"/>';

}
else{
//$figure_save->setImage($save_image.'.jpg');//задаетс€ в программе
//$a="2.jpg";
//$figure->setImage($a);




//$figure->setPatch('foto/');



//$data=date("m.d.y");
//$data = date('m/d/Y h:i:s a', time());
//$data=date('Y-m-d H:i:s');
		//$figure->setData($data);
		//$figure->setPatch('foto/');
		//$figure->setName($_POST['name']);
//imagejpeg($img,'foto/'.$a,100);
//header("Content-Type:image/jpeg");
//imagejpeg($img,NULL,100);
//imagejpeg($figure->getImage(),$figure_save->getPatch().$figure_save->getImage(),100);
$figure->parameterImage();
$figure->saveImage();
$_SESSION['existing']=true;
$image='2.jpg';
$path='foto/';
$figure->updateTemp($path,$image);
$img=$figure->getPictureTemp();
$path=$figure->getPathTemp();

//echo '<img src="image.php"/>';
echo '<img src="'.$path.$img.'"/>';
//imagejpeg($img,'image/'.$save_image.'.jpg',100);//тоже в программе

}
//$img=$figure->getPictureTemp(1);
//$path=$figure->getPathTemp(1);


//echo '<img src="'.$path.$img.'"/>';
//imagegd($img, 'foto/5.jpg');
/*$points = array(
 80,90,
 30,340,
 70,70,
 340,30,
 60,40,
 20,20
 );
 
imagefilledpolygon($img,$points,6,$white);
imageline($img,90,90,170,170,$white);
header("Content-Type:image/jpeg");
imagejpeg($img,NULL,100);*/
 $_SESSION['save']=0;
imagedestroy($figure->getFormatImg());
?>



   <!-- <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='refresh' content='5; URL=<?php  //echo $_SERVER['HTTP_REFERER'];?> '  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>–њ–Њ—Б—В</title>
</head>
<body bgcolor="#efefef" >
<table border="0" width="100%">
	<tr>
		<td width="50%"></td>
		<td valign="middle">
<div style=" margin-top:300px; height:120px; width:500px; background:#DCDCDC; border: solid 3px #808080; font-family:Arial, Helvetica, sans-serif; font-size:18px; padding:20px;">
<?php //echo $answer;?>
</div>
		</td>
		<td width="50%"></td>
	</tr>
</table>
</body>
</html> -->