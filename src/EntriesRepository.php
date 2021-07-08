<?php

    namespace App\Lists;
        
    use PDO; // Die Klasse PDO befindet sich in keinem NameSpace,
             // da diese jedoch benötigt wird, holen wir uns diese mit use. 

    class EntriesRepository 
    {
        private $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        function fetchEntries()
        {
            $stmt = $this->pdo->prepare("SELECT * FROM tabelle");
            $entries = $stmt->fetchAll(PDO::FETCH_CLASS, "App\\lists\\EntryModel");
            
            return $entries;
        }

        public function importEntries() 
        {
            $gameTitle          = $_POST['title'] ?? null;
            $gameDescription    = $_POST['description'] ?? null;
            $gameReleaseDate    = $_POST['releasedate'] ?? null;
            
            if (isset($_POST['submit']))
            {
                if ($gameTitle != '' && $gameDescription != '' && $gameReleaseDate != '')
                {
                    $stmt = $pdo->prepare("INSERT INTO tabelle (title, description, releasedate) VALUES (?, ?, ?)");
                    $stmt->execute(array($gameTitle, $gameDescription, $gameReleaseDate));
                } 
                else 
                {
                    echo "Da ist irgendwas schief gelaufen! Vermutlich hast du nicht alle Felder ausgefüllt.";
                }
            }
        }

    }





?>