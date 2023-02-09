<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="/js/emojie.js"></script>
</head>
<body>


    <div class="box">
        <form class="form" action="php/connexion.php" method="post">
            <h2>LOGIN</h2>
            <div class="inputBox">
                <input type="text" required="required" name='email'>
                <span>e-mail</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name='pass'>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="signin.php">Sign Up</a>
            </div>
            <input type="submit" value="login" name='valid'>
        </form>
    </div>
    
    
</body>
</html>