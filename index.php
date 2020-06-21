<?php
include_once("functions.php");
$etudiants = all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body oncontextmenu="return false">
    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="text-right">
            <a href="create.php" class="btn btn-sm btn-primary my-1">Nouveau</a>
        </div>
        <div class="alert alert-info">liste des etudiants</div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>date naissance</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $p) { ?>
                    <tr>
                        <td><?php echo $p['id']; ?></td>
                        <td><?= $p['nom']; ?></td>
                        <td><?= $p['prenom']; ?></td>
                        <td><?= $p['date_naissance']; ?></td>
                        <th>
                            <div class="btn-group">

                                <a onclick="return confirm('voulew vous vraiment supprimer cet element?')" href="delete.php?id=<?php echo $p['id']; ?>" class="btn btn-sm btn-danger">S</a>
                                <a href="edit.php?id=<?php echo $p['id']; ?>" class="btn btn-sm btn-warning">M</a>
                                <a href="show.php?id=<?php echo $p['id']; ?>" class="btn btn-sm btn-info ">C</a>
                        </th>

    </div>
    </tr>
<?php } ?>
</tbody>
</table>
</div>




</body>

</html>