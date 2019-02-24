<?php
/**
 * Created by PhpStorm.
 * User: Viste
 * Date: 24.02.2019
 * Time: 12:47
 */
session_start();
if (isset($_COOKIE['username'])) {
    echo $_COOKIE['username'];
}

echo '
    <a href="index.php">index</a>
    ';