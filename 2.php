<?php
session_start();

    $_SESSION['name']=$_POST['name'];
    if ($_POST['nameselect'] == "circle") {
      include 'circle.php';
      $_SESSION['figure'] = "circle";
   }
   if ($_POST['nameselect'] =="square") {
       include 'square.php';
       $_SESSION['figure'] = "square";
   }
    if ($_POST['nameselect'] =="parallelogram") {
       include 'parallelogram.php';
       $_SESSION['figure'] = "parallelogram";
   }
    if ($_POST['nameselect'] =="oval") {
      include 'oval.php';
       $_SESSION['figure'] = "oval";
   }
    if ($_POST['nameselect'] =="dot") {
       include 'dot.php';
       $_SESSION['figure'] = "dot";
   }
    if ($_POST['nameselect'] =="line") {
       include 'line.php';
       $_SESSION['figure'] = "line";
   }
    if ($_POST['nameselect'] =="triangle") {
       include 'triangle.php';
       $_SESSION['figure'] = "triangle";
   }
    if ($_POST['nameselect'] =="rectangle") {
       include 'rectangle.php';
       $_SESSION['figure'] = 'rectangle';
   }
    if ($_POST['nameselect'] =='text') {
       include 'text.php';
       $_SESSION['figure'] = "text";
   }
	?>
    
   