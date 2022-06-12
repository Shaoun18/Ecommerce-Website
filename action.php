<?php
require_once 'vendor/autoload.php';

use App\classes\product;
use App\classes\Caregory;
use App\classes\Content;
use App\classes\slider;
use App\classes\FullName;

$category = new Caregory();
$categories = $category->getAllCategory();

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $slider = new slider();
        $sliders = $slider->getslider();
        $contents = new Content();
        $contentss = $contents->getcontent();
        $product = new product();
        $products = $product->getAllProduct();
        include "pages/home.php";
    } elseif ($_GET['page'] == 'about') {
        include "pages/about.php";
    } elseif ($_GET['page'] == 'category') {
        $id = $_GET['id'];
        $product = new product();
        $products = $product->getproductcategorybyid($id);
        include "pages/category.php";
    } elseif ($_GET['page'] == 'full_name') {
        include "pages/full_name.php";
    } elseif ($_GET['page'] == 'contact') {
        include "pages/contact.php";
    } elseif ($_GET['page'] == 'deatils') {
        $id = $_GET['id'];
        $product = new product();
        $singleproduct = $product->getproductbyid($id);
        include "pages/deatils.php";
    }
} elseif (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'Submit') {
        $fullname = new FullName($_POST);
        $result = $fullname->makefullname();
        include 'pages/full_name.php';
    }
}
