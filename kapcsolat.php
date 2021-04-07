<?php

$mysqli = new mysqli("localhost", "root", "", "pizzabar");

if($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_errno);
    exit();
}
$mysqli->set_charset("utf8mb4");
