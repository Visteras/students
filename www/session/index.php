<?php
/**
 * Created by PhpStorm.
 * User: Viste
 * Date: 24.02.2019
 * Time: 12:42
 */
session_start();
if (!empty($_GET['username'])) {
    $_SESSION['username'] = $_GET['username'];
}
    echo '
    <form action="" method="GET">
    <input type="text" name="username">
    <input type="submit">
</form>
    ';

    echo '
    <a href="hello.php">hello</a>
    ';
