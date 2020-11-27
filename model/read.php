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

function getEmployee($EmployeeID){
    include("connection.php");
    $query = "SELECT e.EmployeeID, e.FirstName, e.LastName, e.Mail, e.PostalCode, e.Department, e.Supper, e.Role, locomotions.Locomotion, Activities.Activity
                FROM employees AS e
                INNER JOIN locomotions ON e.LocomotionID = locomotions.LocomotionID
                INNER JOIN employees_activities ON e.employeeID = employees_activities.EmployeeID
                INNER JOIN activities ON employees_activities.ActivityID = Activities.ActivityID";
    $query_params = array(':EmployeeID'=> $EmployeeID);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}

function getAllActivities(){
    include("connection.php");
    $query = "SELECT ActivityID, Activity, MaxParticipant FROM activities";
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

function getAvailableActivities(){
    $totals = getNbByActivity();
    $activities = getAllActivities();
    $newArray = array();

    for ($i = 0; $i < sizeof($activities); $i++ ){
        $cpt = 0;
        for ($j = 0; $j < sizeof($totals); $j++ ){
            if($activities[$i]['ActivityID'] == $totals[$j]['ActivityID']){
                $cpt = 1;
                if($totals[$j]['total'] < $activities[$i]['MaxParticipant']){
                 array_push($newArray, $activities[$i]);
                }
            }
        }
        if($cpt == 0){
            array_push($newArray, $activities[$i]);
        }
    }
    return $newArray;
}

function getNbByActivity(){
    include("connection.php");
    $query = "SELECT count(activityid) as total, ActivityID FROM employees_activities group by ActivityID";
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


function getActivitiesView(){
    include("connection.php");
    $query = "SELECT a.Activity, a.MaxParticipant, count(ea.activityid) AS total, ea.ActivityID
                FROM employees_activities AS ea
                INNER JOIN activities AS a ON a.ActivityID = ea.ActivityID
                GROUP BY ActivityID";
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

function getAdmin($login){
    include("connection.php");
    $query = "SELECT Login, Password
          FROM admins
          WHERE Login = :login";
    $query_params = array( ':login' => $login );
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}