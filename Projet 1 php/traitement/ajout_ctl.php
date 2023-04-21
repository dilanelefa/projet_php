<?php
    require_once("fonction/etudiant.php");
    require_once("fonction/gestion.php");
    if(isset($_POST['nom'], $_POST['matricule'], $_POST['prenom'], $_POST['age'], $_POST['filiere'],
    $_POST['niveau']))
    {
        $matricule = htmlspecialchars($_POST['matricule']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $age = $_POST['age'];
        $filiere = htmlspecialchars($_POST['filiere']);
        $niveau = htmlspecialchars($_POST['niveau']);
        $cotisation = array(0,0,0,0,0);
        
        //construction de l'etudiant
        $etud = new Etudiant($matricule, $nom, $prenom, $age, $filiere, $niveau, $cotisation);
        //ajout de l'etudiant
        if(!$etud->ajouter_etudiant())
        {
            exit(1);
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>