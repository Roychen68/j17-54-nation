<?php
include "db.php";

$action = $_POST['action'];
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    switch ($action) {
        case 'get':
            # code...
            break;
        
        default:
            # code...
            break;
    }
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
}

?>