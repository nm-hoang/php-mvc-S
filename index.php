<?php
require_once("controller/controller.php");
include 'view/nav.php';
include 'view/header.php';
  $controller = new Controller();
  
  if (!isset($_GET['gamename'])) {
    $controller->viewAll();
  } else {
    $controller->viewGameDetail();
  }
?>