<?php



// require MYSQL CONNECTION
require('database/DBController.php');

// require product class
require('database/Product.php');


$db = new DBController();

// product oobject
$product = new Product($db);
