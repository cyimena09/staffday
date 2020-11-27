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

$activities = getActivitiesView();
?>


<table>
    <tr>
        <td>Activité</td>
        <td>Nombre de participant</td>
    </tr>
    <?php foreach ($activities as $activity ){ ?>
        <tr>
            <td><?php echo $activity['Activity']; ?></td>
            <td><?php echo $activity['total']; if ($activity['MaxParticipant'] <900) {echo "/" .  $activity['MaxParticipant'];} ?></td>
        </tr>
    <?php }?>
</table>

<p>Participant au souper</p>

</body>

</html>