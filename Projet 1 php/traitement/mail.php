<?php
    if(isset($_POST['email'], $_POST['message']))
    {
        $from = $_POST['email'];
        $to = "lefakongdilane@gmail.com";
        $subject = "commentaire du club informatique";
        $message = $_POST['message'];
        $headers = "De :" . $from;
        if(mail($to, $subject, $message, $headers))
        {
            echo '<p color = "blue">Envoie reussi</P>';
        }
        else
        {
            echo '<p color = "red">echec</P>';
        }
    }
?>