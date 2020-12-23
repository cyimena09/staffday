<?php

//DEFINE
include('../model/read.php');
include('function.php');

htmlSpecialArray($_POST);
$error=null;

$infos = getAdmin($_POST['Login']);


if (!is_null($infos)) {
    $login = $infos['Login'];
    $passDB = $infos['Password'];
    checkPost($_POST['Login'],$_POST['Password'], $login, $passDB);

    if($error == 'ok'){
        header("Location: ../view/adminSpace.php");
    }
    else{
        header("Location: ../view/adminLogin.php?erreur='.$error");
    }
}

else {
    $error = "Veuillez encoder tous les champs";
    header("Location: ../view/adminLogin.php?erreur= $error");
}


function checkPost($login, $password, $loginDB, $passDB){
  if(isset($login) AND isset($password)){
    if(empty($login)){
      $GLOBALS['error'] = 'Veuillez indiquer votre login svp !';
    }elseif(empty($password)){
      $GLOBALS['error'] = 'Veuillez indiquer votre mot de passe svp !';
    }elseif($login !== $loginDB){
        echo "Login = ". $loginDB;
      $GLOBALS['error'] = 'Votre login est faux !';
    }elseif(!password_verify($password, $passDB)){
      $GLOBALS['error'] = 'Erreur Password';
    }else{
      $GLOBALS['error'] = 'ok';
    }
  }else{
    $GLOBALS['error'] = 'login ou mdp pas present';
  }
}
