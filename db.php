<?php
    // Datenbankabfrage
    $pdo = new PDO(
        'mysql:host=localhost;dbname=test;charset=utf8', 
        'root', 
        ''
    );
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>