<?php
include("function.php");
include("../model/insert.php");


// Variable de check d'erreure
$error = null;
htmlSpecialArray($_POST);
checkEmptyArray($_POST);
checkTrimArray($_POST);


if($error==null){
    if($_POST['Password'] == $_POST['ConfirmPassword']){
        $error = "ok";
    }
    else {
        $error = 'Les mots de passe ne correspondent pas';
    }
}

//REDIRECTIONS
if($error == 'ok'){
    insertAdmin($_POST);
    header('Location: ../view/confirmAdminRegister.php');
}else{
    header('Location: ../view/adminRegister.php?erreur='.$error);
}

