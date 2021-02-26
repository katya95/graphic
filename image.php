<?php
session_start();
ini_set('display_errors', 1);
error_reporting(0);
include_once 'processing.php';
include_once 'config.php';
include_once 'save.php';
echo "<a href='index.php'>Return to figure selection  </a><br>";

$db = new DB();

//figure selection based on session
if ($_SESSION['figure']=='circle'){
	$figure=new Image();;
	$figure->setElement('circle');
	$figure->getElement();
	$figure->savePicture();
 }
 if ($_SESSION['figure']=='square'){
	$figure=new Image();
	$figure->setElement('square');
	$figure->getElement();
	$figure->savePicture();
 }
 if ($_SESSION['figure']=='parallelogram'){
 	$figure=new Image();
	$figure->setElement('parallelogram');
	$figure->getElement();
	$figure->savePicture();
 }
 if ($_SESSION['figure']=='oval'){
	 $figure=new Image();
	$figure->setElement('oval');
	$figure->getElement();
	$figure->savePicture();
 }
 if ($_SESSION['figure']=='dot'){
	$figure=new Image();
	$figure->setElement('dot');
	$figure->getElement();
	$figure->savePicture();
 }
 if ($_SESSION['figure']=='line'){
	$figure=new Image();
	$figure->setElement('line');
	$figure->getElement();
	$figure->savePicture();
 }
 if ($_SESSION['figure']=='triangle'){
	$figure=new Image();
	$figure->setElement('triangle');	
	$figure->getElement();
	$figure->savePicture();
 }
 if ($_SESSION['figure']=='text'){
 	$figure=new Image();
	$figure->setElement('text');
	$figure->getElement();
	$figure->savePicture();
 }
if ($_SESSION['figure']=='rectangle'){
	$figure=new Image();
	$figure->setElement('rectangle');
	$figure->getElement();
}
$_SESSION['photo']='';
//include_once 'save.php';
//form for searching pictures by name
 include_once 'search.php';

?>

