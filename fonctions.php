<?php

header('Content-Type: text/html; charset=utf-8');

    function getConnection() {
        $connection;
        $PARAM_hote='mysql-patisseriegateau.alwaysdata.net';
        $PARAM_port='3306';
        $bdd='patisseriegateau_bdd';
        $PARAM_utilisateur='157052';
        $PARAM_mot_passe='aikokaloina';

        try {
            
            $connection = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$bdd, $PARAM_utilisateur, $PARAM_mot_passe);
            
        } catch(Exception $e) {

            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'Numéro : '.$e->getCode();

        }
        return $connection;
    }

    function getGateau($connection, $critere) {
        $req = "SELECT * FROM Gateau";
        if($critere != null) {
            $req = $req . " WHERE " . $critere;
        }
        $prep = $connection->prepare($req);
		$prep->execute();
        $resultat = $prep->fetchAll();
		return $resultat;
    }  

?>