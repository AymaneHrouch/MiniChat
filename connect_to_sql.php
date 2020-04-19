<?php

try { 
    $db = new PDO('mysql:host=localhost;dbname=ma_base;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // le dernier paramétre est pour afficher les erreurs, hadok li kaykono fel query fhemtinii??  
} 
catch (Exeption $e){ 
    die('Erreur : ' .$e->getMessage()); 
} 

?>