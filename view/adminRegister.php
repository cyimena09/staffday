

<?php
include("../templates/header.php");
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
































