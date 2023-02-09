<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/main.css">
    
    <title>Sign IN</title>

</head>
<body>
    <div class='box'> 
        <form class='form' action="php/user_insert.php" method="post">
            <h2>SignIN</h2>    
            <div class="inputBox">
                <input type="text" required="required" name="nom">
                <span>Nom de famille</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="prenom">
                <span>Prénom</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="email">
                <span>e-mail</span>
                <i></i>
            </div>
            <div class="inputBox" required="required">
                <input type="radio" id="h" name="civilite" value="homme">
                <label class="radio" for="h">Homme</label>
                <input type="radio" id="f" name="civilite" value="femme">
                <label class="radio" for="f">Femme</label>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password">
                <span>mot de passe</span>
                <i></i>
            </div>
            <div class="links">
                <a href="login.php">Deja un compte ?</a>
            </div>
            <input type="submit" value="signUP">        
            
        </form>
    </div>

</body>

</html>
