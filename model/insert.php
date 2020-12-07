<?php

function insertEmployee($post)
{
    include('connection.php');

    $insertedId = null;
    $query = "INSERT INTO employees (FirstName, LastName, Mail, PostalCode, Department, Supper, LocomotionID)
            VALUES (:FirstName, :LastName, :Mail, :PostalCode, :Department, :Supper, :LocomotionID)";
    $query_params = array(
        ':FirstName' => $post['FirstName'],
        ':LastName' => $post['LastName'],
        ':Mail' => $post['Mail'],
        ':PostalCode' => $post['PostalCode'],
        ':Department' => $post['Department'],
        ':Supper' => $post['Supper'],
        ':LocomotionID' => $post['Locomotion']);
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        $insertedId = $db->lastInsertId();

    } catch (PDOException $ex) {
        die("Failed query : " . $ex->getMessage());
    }
    insertEmployeeActivities($insertedId, $post['Activity']);


}

function insertEmployeeActivities($employeeID, $Activity)
{
    include('connection.php');
    $query = "INSERT INTO employees_activities (EmployeeID, ActivityID)
                VALUES (:EmployeeID, :ActivityID)";
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

function insertAdmin($post){
    include('connection.php');
    $post['Password'] = password_hash($post['Password'], PASSWORD_DEFAULT);
    $query = "INSERT INTO admins (Login, Password) VALUES (:Login, :Password)";
    $query_params = array(
        ':Login' => $post['Login'],
        ':Password' => $post['Password']);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}

