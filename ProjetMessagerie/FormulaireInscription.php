<?php

$ipserver ="192.168.65.112";
        $nomBase = "Messagerie";
        $loginPrivilege ="siteWeb";
        $passPrivilege ="siteWeb";
    
        $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
    
        
include 'functions.php';
formulaireAffichageInscription();
?>