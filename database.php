<?php

$base=mysqli_connect("localhost","root","","praksa");

if (mysqli_connect_error()) {
   die ("Morate konektovati bazu");
}