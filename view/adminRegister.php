<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>StaffDay</title>
    <link rel="stylesheet" href="../vendor/bootstrap-4.5.3-dist/css/bootstrap.css">
    <link href="../ressources/css/main.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body style="background-color: rgb(240,240,240);">

<?php
include("header.php");
?>

<div class="content">

    <h2>Nouvel administrateur</h2>

    <form class="mt-5" action="../controller/adminRegister.php" method="post">

        <div class="form-group">
            <label for="Login">Login</label>
            <input class="form-control" id="Login" type="text" placeholder="Ajouter un login" name="Login"/>
        </div>

        <div class="form-group">
            <label for="Password">Mot de passe</label>
            <input class="form-control" id="Password" type="password" placeholder="Attribuer un mot de passe" name="Password"/>
        </div>

        <div class="form-group">
            <label for="ConfirmPassword">Confirmer le mot de passe</label>
            <input class="form-control" id="ConfirmPassword" type="password" placeholder="Confirmer le mot de passe" name="ConfirmPassword">
        </div>

        <input class="btn btn-success" type="submit" value="Enregistrer" />
    </form>

    <div class="error"><?php if(isset($_GET['erreur'])){echo $_GET['erreur'];} ?></div>

</div>

</body>
</html>
































