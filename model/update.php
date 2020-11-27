<?php

function updateEmployee($EmployeeID,$post)
{
    include('connection.php');
    $insertedId = null;
    $query = "UPDATE employees 
                SET FirstName = :FirstName, LastName =:LastName, Mail = :Mail, PostalCode = :PostalCode, Department = :Department, Supper = :Supper, Role = :Role, LocomotionID =  :LocomotionID
                WHERE EmployeeID = :EmployeeID";
    $query_params = array(
        ':EmployeeID' => $EmployeeID,
        ':FirstName' => $post['FirstName'],
        ':LastName' => $post['LastName'],
        ':Mail' => $post['Mail'],
        ':PostalCode' => $post['PostalCode'],
        ':Department' => $post['Department'],
        ':Supper' => $post['Supper'],
        ':Role' => $post['Role'],
        ':LocomotionID' => $post['Locomotion']);
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);

    } catch (PDOException $ex) {
        die("Failed query : " . $ex->getMessage());
    }
    updateEmployeeActivities($EmployeeID, $post['Activity']);
}

function updateEmployeeActivities($employeeID, $Activity)
{
    include('connection.php');
    $query = "UPDATE employees_activities SET ActivityID = :ActivityID
                WHERE EmployeeID = :EmployeeID";
    $query_params = array(
        ':EmployeeID' => $employeeID,
        ':ActivityID' => $Activity);
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        die("Failed query : " . $ex->getMessage());
    }
}