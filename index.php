<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
include 'db.php'; 

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$userId = $_SESSION['user_id']; 

$query = "SELECT * FROM users WHERE id != ? AND id NOT IN (SELECT hidden_user_id FROM hidden_profiles WHERE user_id = ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $userId, $userId); 
$stmt->execute();
$result = $stmt->get_result(); 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>😊 Sohbet Uygulaması 😊</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <input type="text" placeholder="🔍 Ara..." class="search-bar">
            <div class="navbar-right">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <span class="nav-username"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <a href="friends.php" class="nav-link">👥 Arkadaşlar</a>
                    <a href="logout.php" class="nav-link">🚪 Çıkış Yap</a>
                <?php else: ?>
                    <a href="login.php" class="nav-link">🔑 Giriş Yap</a>
                    <a href="register.php" class="nav-link">✍️ Üye Ol</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    
    <main class="container">
        <?php if (isset($_SESSION['user_id'])): ?>
            <section class="profile-section">
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="profile-card">';
                    echo '<img src="' . htmlspecialchars($row['profile_pic']) . '" alt="Profil Fotoğrafı" class="profile-pic">';
                    echo '<div class="profile-info">';
                    echo '<p class="username">' . htmlspecialchars($row['username']) . '</p>';
                    echo '<form action="add_friend.php" method="POST" style="display:inline;">
                            <input type="hidden" name="friend_id" value="' . htmlspecialchars($row['id']) . '">
                            <button type="submit" class="add-friend">✔️</button>
                          </form>';
                    echo '<form action="hide_profile.php" method="POST" style="display:inline;">
                            <input type="hidden" name="hidden_user_id" value="' . htmlspecialchars($row['id']) . '">
                            <button type="submit" class="hide-profile">🗑️</button>
                          </form>';
                    echo '</div></div>';
                }
                ?>
            </section>

            <section class="chat-section">
                <div class="contact-list">
                    <!-- Kişi listesi buraya gelecek -->
                </div>
                <div class="chat-box">
                    <!-- Sohbet buraya gelecek -->
                </div>
            </section>
        <?php else: ?>
            <p class="login-prompt">Lütfen giriş yapın veya üye olun.</p>
        <?php endif; ?>
    </main>
</body>
</html>
