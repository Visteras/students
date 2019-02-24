<?php
/**
 * Created by PhpStorm.
 * User: Viste
 * Date: 24.02.2019
 * Time: 13:51
 */

$mysqli = new mysqli("mysql", "root", "my23SecretPass");
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

$mysqli->select_db("test");


$mysqli->query("SET NAMES 'utf8'");



