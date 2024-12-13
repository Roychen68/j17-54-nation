<?php
include "./db.php";

$login = $pdo->query("SELECT * FROM `admin` WHERE `mail`='{$_POST['mail']}' AND `password`='{$_POST['password']}'")->fetchColumn();

if ($login > 0) {
    $_SESSION['admin'] = true;
    echo true;
} else {
    echo false;
}

?>