<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>création de compte</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        //ajout du menu
        include('./view/menu.php');
    ?>
    <h2>Créer un compte formateur</h2>
    <div class="createUser">
        <form action="" method="post">
            <p>saisir votre nom : </p>
            <input type="text" name="nom">
            <p>saisir votre prénom : </p>
            <input type="text" name="prenom">
            <p>saisir un login : </p>
            <input type="text" name="login">    
            <p>saisir un mot de passe : </p>
            <input type="text" name="mdp">
            <br>
            <br>
            <input type="submit" value="créer">   
        </form>
    </div>
</body>