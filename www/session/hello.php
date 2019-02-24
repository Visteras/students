<?php
/**
 * Created by PhpStorm.
 * User: Viste
 * Date: 24.02.2019
 * Time: 12:47
 */
session_start();
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
}