<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
  echo'Сессии не установлены';
} else {
  $_SESSION['count']++;
  echo'Сессии установлены!';
}
$_SESSION['name'] = "value";
?>