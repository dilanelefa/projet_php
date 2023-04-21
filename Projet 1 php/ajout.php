<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_header_footer.css">
    <link rel="stylesheet" href="style/style_ajout.css">
    <title>Enregistremnet</title>
</head>
<body>
   <!-- en-tete -->
   <?php include("header_footer/header.php")?>

    <!-- corps -->
    <main>
        <form action="ajout.php" method="post">
            <h1>Vos informations</h1>
            <div class="input-box">
                <input type="text" name="matricule"  required = "required">
                <span>Matricule</span> 
            </div>
            <div class="input-box">               
                <input type="text" name="nom"  required = "required">
                <span>Nom</span>
            </div>
            <div class="input-box">                 
                <input type="text" name="prenom"  required = "required">
                <span>Prenom</span>
            </div>
            <div class="input-box">           
                <input type="number" name="age"  required = "required">
                <span>Age</span>
            </div>
            <div class="input-box">                
                <input type="text" name="filiere"  required = "required">
                <span>Filiere</span>
            </div>
            <div class="input-box"> 
                <input type="text" name="niveau"  required = "required">
                <span>Niveau</span>
            </div>
            <button type="submit">Enregistrer</button>
        </form>
        <?php include("traitement/ajout_ctl.php")?>
    </main>

    <!-- pied de page -->
    <?php include("header_footer/footer.php")?>
</body>
</html>