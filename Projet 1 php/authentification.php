
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_header_footer.css">
    <link rel="stylesheet" href="style/style_authen.css">
    <title>Authentification</title>
</head>
<body>
    <?php include("header_footer/header.php");?>
    <main>
        <form action="authen.php" method="post">
            <div class="input-box">
                    <input type="email" name="email" required>
                    <span>Email</span>
                </div>
            <div class="input-box">
                <input type="password" name="mdp" required>
                <span>Mot de passe </span>
            </div>
            <button type="submit">Connecter</button>
        </form>
    </main>
    <?php include("header_footer/footer.php");?>
</body>
</html>