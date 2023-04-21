<?php
    require_once("config.php");
    require_once("etudiant.php");

    //recuperer les donnees du fichier etudiant.txt
    function lecture()
    {
        $etud = array();
        $file = fopen(file_name, "r");
        if($file == NULL)
        {
            return false;
        }
        $i = 0;
        while(fscanf($file, parameter_int, $matricule, $nom, $prenom, $age, $filiere, $niveau, $f1, $f2, $f3, $f4,$f5) != false)
        {
            $etud[$i] = new Etudiant($matricule, $nom, $prenom, $age, $filiere, $niveau, array($f1, $f2, $f3, $f4,$f5));
            $i++;
        }
        fclose($file);
        
        return array($i, $etud);
    }

    //function trier par odre aphabetique
    function lecture_par_ordre_aphabetique()
    {
        $info_lues = lecture();
        if($info_lues == false)
        {
            return false;
        }
        
        list($n, $etud) = $info_lues;
        for($i = 0; $i < $n; $i++)
        {
            $min = strtolower($etud[$i]->getNom());
            $pos_min = $i;
            for($j = $i; $j < $n; $j++)
            {
                $cmp = strtolower($etud[$j]->getNom());
                if(strcmp($min, $cmp) > 0)
                {
                    $min = $cmp;
                    $pos_min = $j;
                }
                $temp = $etud[$pos_min];
                $etud[$pos_min] = $etud[$i];
                $etud[$i] = $temp;
            }
        }
        return array($n,$etud);
    }

    //rechercher un etudiant par son matricule dans le tableau non trie par ordre aphabetique
    function recherche(string $mat):int
    {
        $info_lues = lecture();
        if($info_lues == false)
        {
            return -2;
        }
        
        list($n,$etud) = $info_lues;
        for($i = 0; $i < $n; $i++)
        {
            if(strcmp(strtolower($mat) , strtolower($etud[$i]->getMatricule())) == 0)
            {
                return $i;
            }
        }

        return -1;
    } 

    //supprimer un etudiant de matricule donne
    function supprimer(string $mat)
    {
        $info_lues = lecture();
        if($info_lues == false)
        {
            return false;
        }

        list($n, $etud) = $info_lues;
        $i = recherche($mat);
        if($i < 0)
        {
            return false;
        }

        $file = fopen(file_name, "w");
        if($file == NULL)
        {
            return false;
        }
        fclose($file);
        for($k = 0; $k < $n ; $k++)
        {
            if( $k != $i)
            {
                $etud[$k]->ajouter_etudiant();
            }
        }
    }
?>