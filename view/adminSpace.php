<?php
include("../model/read.php");

include("../templates/header.php");
?>


<div class="container-fluid col-10 mt-5">
    <h2 class="mb-5">Espace administrateur</h2>
    <a href="../view/adminRegister.php">Créer un administrateur</a>
    <a href="../view/employeeRegister.php">Ajouter un participant</a>
<?php
include("../view/employeeList.php");
include("../view/activityList.php");
?>
</div>


</body>
</html>
