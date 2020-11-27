<?php

function deleteEmployee($EmployeeID){
    include('connection.php');
    $query = "DELETE FROM employees WHERE EmployeeID = :EmployeeID";
    $query_params = array( ':EmployeeID' => $EmployeeID);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    deleteEmployeesActivities($EmployeeID);
}

function deleteEmployeesActivities($EmployeeID){
    include('connection.php');
    $query = "DELETE FROM employees_activities WHERE EmployeeID = :EmployeeID";
    $query_params = array( ':EmployeeID' => $EmployeeID);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}
