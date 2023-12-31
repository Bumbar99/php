<?php
require_once "database.php";

$id=$_POST['delete'];


if (!isset($id) || empty($id)) {
    die("Must enter id");
}

$results=$base->query("SELECT * FROM pricing WHERE  id='$id'");

if ($results->num_rows==1) {
   $base->query("DELETE FROM `pricing` WHERE  id='$id'"); 

}
else {
    die("That  id doesn't exist");
    
}
?>