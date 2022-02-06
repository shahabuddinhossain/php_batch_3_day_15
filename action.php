<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\PasswordGenerator;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
    else if ( $_GET['pages'] == 'password-reset' )
    {
        include "pages/password-reset.php";
    } else
    {
        include "pages/home.php";
    }
} elseif (isset($_POST['btn']))
{

    $passwordGenerator = new PasswordGenerator($_POST);
    $newPassword = $passwordGenerator->newPassword() ;

    include "pages/password-reset.php";

}