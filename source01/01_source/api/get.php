<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $action = $_GET['action'];
    switch ($action) {
        case 'bus':
            $buses = $pdo->query("SELECT * FROM `bus`")->fetchAll();
            echo json_encode($buses);
            break;
    }
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
}

?>