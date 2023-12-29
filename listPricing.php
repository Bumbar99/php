<?php
require_once "database.php";

$pricing=$base->query("SELECT * FROM pricing");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

table,th,td {

border:1px solid black;
border-collapse:collapse;
width:250px;
}


    </style>
</head>
<body>
    
<table>
    <tr>

<th>Pricing</th>
<th>Description</th>

</tr>
<?php   foreach ($pricing as $price) :?>
    
<tr>
<td><?php echo $price['price']  ?></td>
<td><?php echo $price['description']  ?></td>

</tr>


<?php  endforeach;   ?>

</table>
</body>
</html>