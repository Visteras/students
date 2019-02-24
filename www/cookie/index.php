<?php
/**
 * Created by PhpStorm.
 * User: Viste
 * Date: 24.02.2019
 * Time: 12:42
 */

if (isset($_GET['username'])) {
    setcookie('username', $_GET['username'], time() + 3600, "/");
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
