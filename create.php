<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
     
    <body>
    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="alert alert-info">Nouveau Etudiant</div>
        <form action="store.php" method="post">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="prenom">
            </div>
            <div class="form-group">
                <label for="d">Date Naissance</label>
                <input type="date" class="form-control" name="datenaissance" id="d">
            </div>
            <button class="btn btn-primary">Valider</button>

        </form>

    </div>

   
    </body>
</html>