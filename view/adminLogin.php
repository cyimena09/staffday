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
include("../model/read.php");
include("header.php");

$activities = getAvailableActivities();
$locomotions = getLocomotions();
?>

<div class="content">

    <h2>Se connecter</h2>

    <form action="../controller/adminLogin.php" method="post">


        <div class="input-group mt-5 mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text"><span class="fas fa-user"></span></span>
            </div>
            <input class="form-control" type="text" placeholder="Login" name="Login">
        </div>

        <div class="input-group mt-5 mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text"><span class="fas fa-lock"></span></span>
            </div>
            <input class="form-control" type="text" placeholder="Mot de passe" name="Password">
        </div>

        <input class="btn btn-success" type="submit" value="Se connecter" />
    </form>

</div>


</body>
</html>


