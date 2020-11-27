<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>StaffDay</title>
    <link rel="stylesheet" href="vendor/bootstrap-4.5.3-dist/css/bootstrap.css">
    <link href="ressources/css/main.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body style="background-color: rgb(240,240,240);">

<?php
include("view/header.php");

?>


<div class="content">

    <h2>Que souhaitez-vous faire ?</h2>

    <div class="actions">
        <a class="action" href="view/employeeRegister.php">
            <span class="fas fa-journal-whills"></span>
            <p>S'inscrire à une activité</p>
        </a>


        <a class="action" href="view/adminLogin.php">
            <span class="fas fa-user-cog"></span>
            <p>Espace administrateur</p>
        </a>
    </div>

</div>


<script src="vendor/bootstrap-4.5.3-dist/js/bootstrap.js"></script>


</body>

</html>
