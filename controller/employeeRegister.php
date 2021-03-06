<?php
include("function.php");
include("../model/insert.php");
include("../model/read.php");


// Variable de check d'erreure
$error = null;
htmlSpecialArray($_POST);
checkEmptyArray($_POST);
checkTrimArray($_POST);

if($error==null){
    if(checkNom($_POST['LastName']) == 'ok' && checkPrenom($_POST['FirstName']) == 'ok' ){
        if(checkFormatMail($_POST['Mail'])){
            if(checkNumber($_POST['PostalCode'])){
                $error = "ok";
            }
            else{
                $error = "Le code postal est invalide ";
            }
        }
        else{
            $error = "L'email n'est pas correct";
        }
    }
}

//REDIRECTIONS
if($error == 'ok'){
    // on vérifie si l'utilisateur est unique
    $unique = getEmployeeByFirstNameLastName($_POST['FirstName'], $_POST['LastName']);

    if(!is_null($unique)){
        header('Location: ../view/employeeExist.php');
    }
    else{
        insertEmployee($_POST);
        header('Location: ../view/confirmEmployeeRegister.php');
    }

}else{
    header('Location: ../view/employeeRegister.php?erreur='.$error);
}

// FONCTIONS DU CONTROLLER
function checkNom($nom){
    return !checkNumber($nom) ? 'ok' : $GLOBALS['error'] = 'nom : chiffre !';
}

function checkPrenom($prenom){
    return !checkNumber($prenom) ? 'ok' : $GLOBALS['error'] = 'prenom : chiffre !';
}
