

<?php
include("../model/read.php");
$activities = getAvailableActivities();
$locomotions = getLocomotions();

include("../templates/header.php");
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

        <div class="form-check mt-4">
            <input class="form-check-input" type="radio" name="Supper" id="participe" value="non" checked>
            <label class="form-check-label" for="participe">
                Je ne participe pas au souper
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Supper" id="notparticipe" value="oui">
            <label class="form-check-label" for="notparticipe">
                Je participe au souper
            </label>
        </div>

        <input class="btn btn-success mt-5" type="submit" value="Enregistrer" />
    </form>

    <div class="error"><?php if(isset($_GET['erreur'])){echo $_GET['erreur'];} ?></div>

</div>

</body>

</html>
