<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM `category` WHERE id = $id ";

mysqli_query($con, $q);

header('location:listcategory.php');

?>