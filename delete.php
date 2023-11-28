<?php
session_start();

include "db.php";
$db = new Database();

try {
    if ($_GET['id']) {
        $db->deleteUser($_GET['id']);
        $_SESSION['delete_success'] = true;
        header("Location: index.php");
        exit();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
