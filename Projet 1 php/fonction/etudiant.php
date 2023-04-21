<?php
    require("config.php");
    class Etudiant
    {
        private string $matricule;
        private string $nom;
        private string $prenom;
        private int $age;
        private string $filiere;
        private string $niveau;
        private array $cotisation;
    
        public function __construct(string $matricule,  string $nom, string $prenom, int $age,
        string $filiere,string $niveau, array $cotisation)
        {
            $this->matricule = $matricule;
            $this->nom = $nom; 
            $this->prenom = $prenom;
            $this->age  = $age;
            $this->filiere = $filiere;
            $this->niveau = $niveau;
            $this->cotisation = $cotisation;
        }

        public function ajouter_etudiant(): Bool
        {   
            $file = fopen(file_name, "a");
            if($file == NULL)
            {
                return false;
            }

            fprintf($file, parameter_out, $this->matricule, $this->nom, $this->prenom, $this->age, $this->filiere ,$this->niveau, $this->cotisation[0], $this->cotisation[1], $this->cotisation[2], $this->cotisation[3], $this->cotisation[4]);
            fclose($file);
            return true;
        }

        public function setMatricule(string $matricule)
        {
            $this->matricule = $matricule;
        }
        public function getMatricule():string
        {
            return $this->matricule;
        }

        public function setNom(string $nom)
        {
            $this->nom = $nom;
        }
        public function getNom():string
        {
            return $this->nom;
        }

        public function setPrenom(string $prenom)
        {
            $this->prenom = $prenom;
        }
        public function getPrenom():string
        {
            return $this->prenom;
        }

        public function setAge(string $age)
        {
            $this->age= $age;
        }
        public function getAge():int
        {
            return $this->age;
        }


        public function setFiliere(string $filiere)
        {
            $this->filiere = $filiere;
        }
        public function getFiliere():string
        {
            return $this->filiere;
        }

        public function setNiveau(string $niveau)
        {
            $this->niveau = $niveau;
        }
        public function getNiveau():string
        {
            return $this->niveau;
        }

        public function setCotisation(int $numero_cotis, float $value)
        {
            $this->cotisation[$numero_cotis] = $value;
        }
        public function getCotisation():array
        {
            return $this->cotisation;
        }


    }

    