<?php


function getEmployees(){
    include("connection.php");

    $query = "SELECT e.EmployeeID, e.FirstName, e.LastName, e.Mail, e.PostalCode, e.Department, e.Supper, e.Role, locomotions.Locomotion, Activities.Activity
                FROM employees AS e
                INNER JOIN locomotions ON e.LocomotionID = locomotions.LocomotionID
                INNER JOIN employees_activities ON e.employeeID = employees_activities.EmployeeID
                INNER JOIN activities ON employees_activities.ActivityID = Activities.ActivityID";

    $query_params = array();
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getActivities(){
    include("connection.php");
    $query = "SELECT a.ActivityID, a.Activity FROM activities AS a";
    $query_params = array();
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function getNbByActivity($activity){
    include('connection.php');
    $query =$db->query("Select count(activityID) as total from employees_activities as ea where ea.activityid = {$activity}") ;
    $query_params = array();
    try{
        $result  = $query->fetch();
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result['total'];
}

function getLocomotions(){
    include("connection.php");
    $query = "SELECT l.LocomotionID, l.Locomotion FROM locomotions AS l";
    $query_params = array();
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



// returns the number of participants for the activity entered as a parameter
function getParticipant(){
    include("connection.php");
}