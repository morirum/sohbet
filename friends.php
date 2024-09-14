<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$userId = $_SESSION['user_id'];
$friendId = $_POST['friend_id'];

$query = "INSERT INTO friends (user_id, friend_id) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $userId, $friendId);
$stmt->execute();

header('Location: index.php'); 

?>
