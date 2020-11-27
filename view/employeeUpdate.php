<?php
include("../model/read.php");
$employee = getEmployee($_GET['EmployeeID']);
$activities = getAvailableActivities();
$locomotions = getLocomotions();
?>


<h2>Modifier <?php echo  $employee['FirstName'] . " " . $employee['LastName']?></h2>

<form action="../controller/employeeUpdate.php?EmployeeID=<?php echo $_GET['EmployeeID'];?>" method="post" >
    <label for="FirstName">Prénom : </label>
    <input id="FirstName" type="text" name="FirstName"/>
    <br><br>
    <label for="LastName">Nom:</label>
    <input id="LastName" type="text" name="LastName"/>
    <br><br>
    <label for="Mail">Mail : </label>
    <input id="Mail" type="text" name="Mail">
    <br><br>
    <label for="PostalCode">Code postal : </label>
    <input id="PostalCode" type="text" name="PostalCode">
    <br><br>
    <label for="Department">Département : </label>
    <input id="Department" type="text" name="Department">
    <br><br>
    <label for="Supper">Souper : </label>
    <input id="Supper" type="text" name="Supper">
    <br><br>
    <label for="Role">Role : </label>
    <input id="Role" type="text" name="Role">
    <br><br>

    <label>Moyen de locomotion : </label>
    <select name="Locomotion">
        <?php foreach ($locomotions as $locomotion ){ ?>
            <option value="<?php echo $locomotion['LocomotionID']; ?>"><?php echo $locomotion['Locomotion']; ?></option>
        <?php }?>
    </select>

    <br><br>

    <label>Choisissez votre activité : </label>
    <select name="Activity">
        <?php foreach ($activities as $activity ){ ?>
            <option value="<?php echo $activity['ActivityID']; ?>"><?php echo $activity['Activity']; ?></option>
        <?php }?>
    </select>



    <input type="submit" value="Enregistrer" />
</form>
