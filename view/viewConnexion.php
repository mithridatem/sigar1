<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigar Connexion : </title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        //ajout du menu
        include('./view/menu.php');
    ?>
    <div class="connexion">
        <form action="" method="post">
            <p>saisir un login : </p>
            <input type="text" name="login">    
            <p>saisir un mot de passe : </p>
            <input type="password" name="mdp">
            <br>
            <br>
            <input type="submit" value="connexion">   
        </form>
    </div>
</body>