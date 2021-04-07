<?php

//--beszúrás a rendelésbe: $_SESSION["user"]["vazon"]
$sql = "INSERT INTO `prendeles` (`razon`, `vazon`, `fazon`, `datum`) VALUES (NULL, ".$_SESSION["user"]["vazon"].", 1, CURRENT_TIMESTAMP)";
//-- beszúrás a tételbe: $_SESSION["kosar"]
$result= $mysqli->query($sql);
$razon=$mysqli->insert_id;
foreach ($_SESSION["kosar"] as $value) {
    $sql = "INSERT INTO `ptetel` (`razon`, `fazon`, `db`) VALUES (".$razon.", ".$value.", 1)";
    $mysqli->query($sql);
}
echo 'A rendelés megtörtént';
?>