<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔐 Giriş Yap</title>
    <link rel="icon" href="favicon.jpg" type="image/jpg">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .login-form label {
            text-align: left;
            font-weight: bold;
            color: #333;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        .login-form input[type="text"]:focus,
        .login-form input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .login-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>🔐 Giriş Yap</h2>
        <form action="login_process.php" method="POST" class="login-form">
            <label for="username">👤 Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">🔑 Şifre:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Giriş Yap" class="login-button">
        </form>
    </div>
</body>
</html>
