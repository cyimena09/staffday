<?php
include("../models/read.php");
$employees = getEmployees();
$nb = getNbByActivity();
?>


<table>
    <tr>
        <td>Prénom</td>
        <td>Nom</td>
        <td>Mail</td>
        <td>Code postal</td>
        <td>Département</td>
        <td>Souper</td>
        <td>Role</td>
        <td>Activité</td>
        <td>Locomotion</td>
        <td>Nombre</td>
    </tr>
    <?php foreach ($employees as $employee ){ ?>
        <tr>
            <td><?php echo $employee['FirstName']; ?></td>
            <td><?php echo $employee['LastName']; ?></td>
            <td><?php echo $employee['Mail']; ?></td>
            <td><?php echo $employee['PostalCode']; ?></td>
            <td><?php echo $employee['Department']; ?></td>
            <td><?php echo $employee['Supper']; ?></td>
            <td><?php echo $employee['Role']; ?></td>
            <td><?php echo $employee['Activity']; ?></td>
            <td><?php echo $employee['Locomotion']; ?></td>
            <td><?php echo $nb; ?></td>
            <td> <button><a href="">EDIT</a></button> </td>
        </tr>
    <?php }?>
</table>
