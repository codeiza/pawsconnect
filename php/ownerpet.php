<?php
session_start();

include 'db_connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM pet WHERE user_id = '$user_id'";
    $result = $conn->query($sql);

    include_once($_SERVER['DOCUMENT_ROOT'] . '/views/pets/yourpet.php');
}
?>