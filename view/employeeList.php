<?php
$employees = getEmployees();
?>


<table class="table table-bordered">
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Mail</th>
        <th>Code postal</th>
        <th>Département</th>
        <th>Souper</th>
        <th>Activité</th>
        <th>Locomotion</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $employee ){ ?>
    <tr>
        <td><?php echo $employee['FirstName']; ?></td>
        <td><?php echo $employee['LastName']; ?></td>
        <td><?php echo $employee['Mail']; ?></td>
        <td><?php echo $employee['PostalCode']; ?></td>
        <td><?php echo $employee['Department']; ?></td>
        <td><?php echo $employee['Supper']; ?></td>
        <td><?php echo $employee['Activity']; ?></td>
        <td><?php echo $employee['Locomotion']; ?></td>
        <td>
            <button class="btn btn-warning btn-sm"><a style="color: black" href="employeeUpdate.php?EmployeeID=<?php echo $employee['EmployeeID'];?>">Modifier</a></button>
            <button class="btn btn-danger btn-sm"><a style="color: white" href="../controller/employeeDelete.php?EmployeeID=<?php echo $employee['EmployeeID'];?>">Supprimer</a></button>
        </td>
    </tr>
    <?php }?>
    </tbody>

</table>
