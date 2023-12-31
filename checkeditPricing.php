<?php
require_once "database.php";
$id=$_POST['ID'];
$price=$_POST['price'];
$description=$_POST['description'];

if (!isset($id) || empty($id)) {
    die("Must enter id");
}
$result=$base->query("SELECT * FROM pricing WHERE id=$id");
if ($result->num_rows==0) {
    die("That price id doesn't exist");
}
elseif (isset($price) || isset($description)){

   $base->query("UPDATE `pricing` SET `price`='$price',`description`='$description' WHERE id='$id'");

}

?>