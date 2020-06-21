<?php
    include("functions.php");
    $id = (int) $_GET['id'];
    delete($id);
    header("location:index.php");
    ?>