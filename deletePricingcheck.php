<?php
require_once "database.php";
$price=$_POST['price'];
$id=$_POST['delete'];


if (!isset($id) || empty($id)) {
    die("Must enter id");
}

if (!isset($price) || empty($price)) {
    die("Must enter price");
}

$result=$base->query("SELECT * FROM pricing WHERE id='$id' AND price='$price'");
if ($result->num_rows==1) {
    $base->query("DELETE FROM 'pricing' WHERE id='$id' AND price='$price'");
}
else {
    die("That price and price id doesn't exist");
    
}
?>