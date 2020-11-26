<?php

function checkNumber($elem){
    return (preg_match('#[0-9]#', $elem)) ? true : false ;
}

function checkLettre($elem){
    return (preg_match('#[a-z]#', $elem) || preg_match('#[A-Z]#', $elem)) ? true : false;
}
function checkUpcase($elem){
    return (preg_match('#[A-Z]#', $elem)) ? true : false;
}

function checkFormatMail($elem){
    return (preg_match('#^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$#', $elem)) ? true : false ;
}

function checkEmptyArray($post)
{
    foreach ($post as $key => $elem) {
        if (empty($elem)) {
            return $GLOBALS['error'] = $key . ' vide !';
        }
    }
}

function checkTrimArray($post){
    foreach($post as $key => $elem){
        $_POST[$key] = trim($elem);
    }
}

function htmlSpecialArray($post){
    foreach($post as $key => $elem){
        $_POST[$key] = htmlspecialchars($elem);
    }
}

function calculAge($birthDay) {
    $age = date('Y') - $birthDay;
    if (date('md') < date('md', strtotime($birthDay))) {
        return $age - 1;
    }
    return $age;
}

