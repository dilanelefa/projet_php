<footer>
    <div class="foot1">
        <h1>Rubrique</h1>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="ajout.php">s'enregistrer</a></li>
            <li><a href="authentification.php">Manager</a></li>
        </ul>
    </div>
    <div class="comment">
        <h1>Avis</h1>
        <form action="" method="post">
            <input type="email" name="email_comment" placeholder="email" required>
            <textarea cols="15" rows="3" placeholder="message" name="message"></textarea>
            <button type="submit">Envoyer</button> 
        </form>
        <?php include("traitement/mail.php");?>
    </div>
</footer>