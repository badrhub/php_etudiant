<?php 
include("functions.php");
extract($_POST);
store($nom,$prenom,$datenaissance);
header('location:index.php');
?>
