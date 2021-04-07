<?php
/*
 * megadjuk a script által létrehozott weboldal kódolását
 * cp1252; latin2;nemjó
 */
header('Content-Type: text/html; charset=utf-8');
/*
 * superglobal változók feltöltése beállítása
 */
session_start();
require_once './kapcsolat.php'; //--használhazó az adatbázis kapcsolat
$menupont=filter_input(INPUT_GET, "menu", FILTER_SANITIZE_STRING);
if(!isset($_SESSION["belepett"])) {
    $_SESSION["belepett"] = false;
}
$_SESSION["error"] = false;
if(filter_input(INPUT_POST, "login", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
    //--beviteli mezők értékeinek kiolvasása
    $username=filter_input(INPUT_POST, "InputUserName", FILTER_SANITIZE_STRING);
    $password= filter_input(INPUT_POST, "InputPassword", FILTER_SANITIZE_STRING );
    
    //--ellenőrzés adatbázisban
    $result = $mysqli->query("SELECT `vazon`,`vnev`,`vcim` FROM `pvevo` WHERE `vnev`='".$username."' AND `jelszo`=md5('".$password."')");
    if($result-> num_rows == 1) {
        $_SESSION["user"] = $result->fetch_assoc();
        $_SESSION["belepett"] = true;
    }else {
        $_SESSION["belepett"] = false;
        $_SESSION["error"] = true;
        $SESSION["error_message"] = "Sikertelen azonosítás!";
    }
    
}

require_once './head.php';
require './fejlec.php';
if($_SESSION["belepett"]) {
    require './menu.php';
    require './tartalom.php';
} else {
    require_once './login.php';
}
require './lablec.php';
?>


