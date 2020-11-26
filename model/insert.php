<?php

function insertEmployee($post)
{
    include('connection.php');
    include("../model/read.php");
    var_dump($post);
    $insertedId = null;
    $query = "INSERT INTO employees (FirstName, LastName, Mail, PostalCode, Department, Supper, Role, LocomotionID)
                VALUES (:FirstName, :LastName, :Mail, :PostalCode, :Department, :Supper, :Role, :LocomotionID)";
    $query_params = array(
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
    $query = "INSERT INTO admin (login,	email,	mdp) VALUES (:login,	:email,	:mdp)";
    $query_params = array( ':login' => $post['login'],
        ':email' => $post['email'],
        ':mdp' => $post['mdp']);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}

