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

        <h2>S'inscrire au Staff Day</h2>

        <form class="mt-5" action="../controller/employeeRegister.php" method="post">

            <div class="form-group">
                <label for="FirstName">Prénom</label>
                <input class="form-control" id="FirstName" type="text" name="FirstName"/>
            </div>

            <div class="form-group">
                <label for="LastName">Nom</label>
                <input class="form-control" id="LastName" type="text" name="LastName"/>
            </div>

            <div class="form-group">
                <label for="Mail">Mail</label>
                <input class="form-control" id="Mail" type="text" name="Mail">
            </div>

            <div class="form-group">
                <label for="PostalCode">Code postal</label>
                <input class="form-control" id="PostalCode" type="text" name="PostalCode">
            </div>

            <div class="form-group">
                <label for="Department">Département </label>
                <input class="form-control" id="Department" type="text" name="Department">
            </div>

            <div class="form-group">
                <label for="Supper">Souper</label>
                <input class="form-control" id="Supper" type="text" name="Supper">
            </div>

            <div class="form-group">
                <label for="Role">Role</label>
                <input class="form-control" id="Role" type="text" name="Role">
            </div>

            <div class="form-group">
                <label>Moyen de locomotion</label>
                <select class="form-control" name="Locomotion">
                    <?php foreach ($locomotions as $locomotion ){ ?>
                        <option value="<?php echo $locomotion['LocomotionID']; ?>"><?php echo $locomotion['Locomotion']; ?></option>
                    <?php }?>
                </select>
            </div>


            <div class="form-group">
                <label>Choisissez votre activité</label>
                <select class="form-control" name="Activity">
                    <?php foreach ($activities as $activity ){ ?>
                        <option value="<?php echo $activity['ActivityID']; ?>"><?php echo $activity['Activity']; ?></option>
                    <?php }?>
                </select>
            </div>

            <input class="btn btn-success" type="submit" value="Enregistrer" />
        </form>

        <div class="error"><?php if(isset($_GET['erreur'])){echo $_GET['erreur'];} ?></div>

    </div>

</body>

</html>
