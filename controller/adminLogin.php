<?php

//DEFINE
include('../model/read.php');
include('function.php');

htmlSpecialArray($_POST);
$infos = getAdmin($_POST['Login']);


$passDB = $infos['Password'];
$loginDB = $infos['Login'];

if (checkPost($_POST['Login'], $_POST['Password'], $passDB, $loginDB) == 'ok') {
    header("Location: ../view/adminSpace.php");
} else {
    header("Location: ../view/adminLogin.php");
}

function checkPost($login, $password, $passDB, $loginDB)
{
    if (isset($login) and isset($password)) {
        if (empty($login)) {
            return 'Veuillez indiquer votre login svp !';
        } elseif (empty($password)) {
            return 'Veuillez indiquer votre mot de passe svp !';
        } elseif ($login !== $loginDB) {
            return 'Votre login est faux !';
        } elseif ($password != $passDB) {
            return 'Erreur Password';
        } else {
            return 'ok';
        }
    } else {
        return 'login ou mdp pas present';
    }
}

