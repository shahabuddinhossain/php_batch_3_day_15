<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
    else if ( $_GET['pages'] == 'password-reset' )
    {
        include "pages/password-reset.php";
    } elseif($_GET['pages'] == 'blog')
    {
        $blog = new Blog();
        $blogs = $blog->getAllBlogs();

        /*echo "<pre>";
        print_r($blogs);*/
        include "pages/blog.php";
    } elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProducts();


        include "pages/product.php";
    }
    elseif ($_GET['pages'] == 'productDetails')
    {
        $product = new ProductDetails();
        $products = $product->getAllProducts();


        include "pages/productDetails.php";
    }

    else
    {
        include "pages/home.php";
    }
} elseif (isset($_POST['btn']))
{

    $passwordGenerator = new PasswordGenerator($_POST);
    $newPassword = $passwordGenerator->newPassword() ;

    include "pages/password-reset.php";

}