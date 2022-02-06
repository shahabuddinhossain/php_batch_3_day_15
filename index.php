<?php


require_once "vendor/autoload.php";
use App\classes\Home;

$home = new Home();
$home->index();
/*
  public function index()
    {
        header("Location: pages/index.php");
    }
 */