<?php
require_once "database.php";
$price=$_POST['price'];
$description=$_POST['description'];



if (!isset($price) || empty($price)) {
    die("Must enter price");
}
if (!isset($description) || empty($description)) {
    die("Must enter description");
}
$base->query("INSERT INTO pricing (price,description) VALUES('$price','$description')");


