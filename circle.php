<?php 
include_once 'processing.php';
$circle=new  Circle();


	$circle->setCentreX($_POST['name_center_x']);
	$circle-> setCentreY($_POST['name_center_y']);
	$circle->setWidth($_POST['width']);
	$circle->setHeight($_POST['height']);
	$circle->setStartDegree($_POST['start_circle_degree']);
	$circle->setEndDegree($_POST['end_circle_degree']);//формат данных проверить
	
	
	echo $circle->getCentreX($_POST['name_center_x']).'<br/>';
	echo $circle-> getCentreY($_POST['name_center_y']).'<br/>';
	echo $circle->getWidth($_POST['width']).'<br/>';
	echo $circle->getHeight($_POST['height']).'<br/>';
	echo $circle->getStartDegree($_POST['start_circle_degree']).'<br/>';
	echo $circle->getEndDegree($_POST['end_circle_degree']).'<br/>';//формат данных проверить
?>