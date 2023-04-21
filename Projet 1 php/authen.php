<?php
    if($_POST['mdp'] == "dilane")
    {
        header("location:manager.php");
        exit;
    }
    else
    {
        header("location:authentification.php");
        exit;
    }
?>