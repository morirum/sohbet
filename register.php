<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>✍️ Üye Ol</title>
</head>
<body>
    <h2>✍️ Üye Ol</h2>
    <form action="register_process.php" method="POST" enctype="multipart/form-data">
        <label for="username">👤 Kullanıcı Adı:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">🔑 Şifre:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="profile_pic">📸 Profil Fotoğrafı:</label><br>
        <input type="file" id="profile_pic" name="profile_pic"><br><br>
        <input type="submit" value="Üye Ol">
    </form>
</body>
</html>
