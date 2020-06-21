<?php 
require("functions.php");
$id =(int) $_GET['id'];
$etudiant = find($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition de  <?= $etudiant['id'] ?> </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
</head>

<body>
    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="alert alert-info">Modidication de l'etudiant</div>

        <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $etudiant['id']?> ">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom"  value="<?= $etudiant['nom']?>">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="prenom" value="<?= $etudiant['prenom']?>">
            </div>
            <div class="form-group">
                <label for="d">Date Naissance</label>
                <input type="date" class="form-control" name="datenaissance" id="d" value="<?= $etudiant['date_naissance']?>">
            </div>
            <button class="btn btn-primary">Valider</button>

        </form>

    </div>




    </body>

</html>