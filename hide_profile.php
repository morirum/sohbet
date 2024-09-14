<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$userId = $_SESSION['user_id'];
$hiddenUserId = $_POST['hidden_user_id'];

$query = "INSERT INTO hidden_profiles (user_id, hidden_user_id) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $userId, $hiddenUserId);
$stmt->execute();

header('Location: index.php');
?>
