<?php
include("../model/read.php");


?>

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


<div class="container-fluid col-10 mt-5">
    <h2 class="mb-5">Espace administrateur</h2>
    <a href="../view/employeeRegister.php">Ajouter un participant</a>
<?php
include("../view/employeeList.php");
include("../view/activityList.php");
?>
</div>



</body>
</html>
