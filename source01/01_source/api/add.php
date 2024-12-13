<?php
include "db.php";

$action = $_POST['action'];
switch ($action) {
    case 'bus':
        $pdo->query("INSERT INTO `bus`(`plate`, `time`) VALUES ('{$_POST['plate']}','{$_POST['time']}')");
        break;
    
    case 'station':
        $pdo->query("INSERT INTO `bus`(`plate`, `time`) VALUES ('{$_POST['plate']}','{$_POST['time']}')");
        break;

    case 'participants':
        $pdo->query("INSERT INTO `bus`(`plate`, `time`) VALUES ('{$_POST['plate']}','{$_POST['time']}')");
        break;
}
?>