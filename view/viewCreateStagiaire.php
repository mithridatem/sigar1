<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>    
<body>
    <?php
        include('menu.php');
    ?>
    <form action="" method="post">
        <p>saisir le nom du stagiaire</p>
        <input type="text" name="nom_stg">
        <br>
        <p>saisir le prenom du stagiaire</p>
        <input type="text" name="prenom_stg">
        <br>
        <br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>