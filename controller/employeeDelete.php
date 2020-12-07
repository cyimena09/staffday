<?php

if (isset($_GET['EmployeeID'])) {
    include("../model/delete.php");
    deleteEmployee($_GET['EmployeeID']);
    header('Location: ../view/adminSpace.php');
}
