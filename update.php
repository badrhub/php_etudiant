<?php 
require('functions.php');
extract($_POST);
update($nom,$prenom,$datenaissance,$id);
header('location:index.php');
?>