<?php
/**
 * Created by PhpStorm.
 * User: Viste
 * Date: 24.02.2019
 * Time: 14:22
 */

require "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (ctype_digit(strval($id)) && $id > 0) {
        if (!($query = $mysqli->prepare("DELETE FROM users WHERE id=?"))) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
        }

        if (!$query->bind_param("i", $_GET['id'])) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
        }

        if (!$query->execute()) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
        }
    } else {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        echo "Ошибка в id, ожидалось положительное число: (" . $id . ")";
    }
}