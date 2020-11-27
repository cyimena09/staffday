<?php
include("function.php");
include("../model/update.php");


// Variable de check d'erreure
$error = null;
htmlSpecialArray($_POST);
checkEmptyArray($_POST);
checkTrimArray($_POST);

$error = 'ok';

//if($error==null){
//    if(checkNom($_POST['name']) == 'ok' && checkPrenom($_POST['firstName']) == 'ok'){
//        $error = 'ok';
//    }
//}

//REDIRECTIONS
if($error == 'ok'){
    echo 'ouiiiiiiiiii';
    updateEmployee($_GET['EmployeeID'], $_POST);

    header('Location: ../view/adminSpace.php');
}else{
    header('Location: ../view/employeeUpdate.php?erreur='.$error);
}


// FONCTIONS DU CONTROLLER
function checkNom($nom){
    return !checkNumber($nom) ? 'ok' : $GLOBALS['error'] = 'nom : chiffre !';
}
function checkPrenom($prenom){
    return !checkNumber($prenom) ? 'ok' : $GLOBALS['error'] = 'prenom : chiffre !';
}

