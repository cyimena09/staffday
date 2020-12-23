

<?php
include("../model/read.php");
$activities = getAvailableActivities();
$locomotions = getLocomotions();

include("../templates/header.php");

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
            <input class="form-control" type="password" placeholder="Mot de passe" name="Password">
        </div>

        <input class="btn btn-success" type="submit" value="Se connecter" />
    </form>

    <div class="error"><?php if(isset($_GET['erreur'])){echo $_GET['erreur'];} ?></div>

</div>


</body>
</html>


