<?php
require_once "vendor/autoload.php";
use App\classes\Home;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
} else
{

}