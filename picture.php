<?php 
include_once 'config.php';
include_once 'processing.php';
$db=new DB();
$figure_save=new Figure($db);
$figure_save->getPicture();
echo "<a href='index.php'>Return to figure selection</a>";
?>