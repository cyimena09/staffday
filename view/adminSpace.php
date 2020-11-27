<?php
include("../model/read.php");
$activities = getActivitiesView();


?>

<a href="../view/employeeRegister.php">Ajouter un participant</a>

<?php
include("../view/employeeList.php");
include("../view/activityList.php");
?>

