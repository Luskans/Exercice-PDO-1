<?php

require_once('connexion.php');

/////////////////// EXERCICE 1 //////////////////////

// $clientsStatement = $db->query('SELECT * FROM clients');
// $clients = $clientsStatement->fetchAll();

// $recipesStatement = $db->prepare('SELECT * FROM recipes');
// $recipesStatement->execute();
// $recipes = $recipesStatement->fetchAll();

// foreach($clients as $client) {
//     var_dump($client);
// }

/////////////////// EXERCICE 2 /////////////////////

// $showtypesStatement = $db->query('SELECT * FROM showtypes');
// $showtypes = $showtypesStatement->fetchAll();

// foreach($showtypes as $showtype) {
//     var_dump($showtype['type']);
// }

/////////////////// EXERCICE 3 /////////////////////

// $clientsStatement = $db->query('SELECT lastName FROM clients LIMIT 20');
// $clients = $clientsStatement->fetchAll();

// foreach($clients as $client) {
//     var_dump($client);
// }

/////////////////// EXERCICE 4 /////////////////////

// $clientsStatement = $db->query('SELECT lastName FROM clients WHERE card = 1');
// $clients = $clientsStatement->fetchAll();

// foreach($clients as $client) {
//     var_dump($client);
// }

/////////////////// EXERCICE 5 /////////////////////

// $clientsStatement = $db->query('SELECT lastName, firstName FROM clients ORDER BY lastName');
// $clients = $clientsStatement->fetchAll();

// foreach($clients as $client) {
//     if (substr($client['lastName'], 0, 1) == 'M') {
//         echo 'Nom: '.$client['lastName'].'<br>';
//         echo 'Prénom: '.$client['firstName'].'<br><br>';
//     }
// }

// $clientsStatement = $db->query('SELECT lastName, firstName FROM clients WHERE lastName LIKE "M%" ORDER BY lastName');
// $clients = $clientsStatement->fetchAll();

// foreach($clients as $client) {
//         echo 'Nom: '.$client['lastName'].'<br>';
//         echo 'Prénom: '.$client['firstName'].'<br><br>';
// }

/////////////////// EXERCICE 6 /////////////////////

// $showsStatement = $db->query('SELECT title, performer, date, startTime FROM shows ORDER BY title');
// $shows = $showsStatement->fetchAll();

// foreach($shows as $show) {
//         echo 'Spectacle: '.$show['title'].'<br>';
//         echo 'Artiste: '.$show['performer'].'<br>';
//         echo 'Date: '.$show['date'].'<br>';
//         echo 'Heure: '.$show['startTime'].'<br><br>';
// }

/////////////////// EXERCICE 7 /////////////////////

$clientsStatement = $db->query('SELECT * FROM clients');
$clients = $clientsStatement->fetchAll();

foreach($clients as $client) {
    echo 'Nom: '.$client['lastName'].'<br>';
    echo 'Prénom: '.$client['firstName'].'<br>';
    echo 'Date de naissance: '.$client['birthDate'].'<br>';
    if ($client['card']) {
        echo "Carte de fidélité: Oui<br>";
        echo 'Numéro de carte: '.$client['cardNumber'].'<br><br>';
    } else {
        echo "Carte de fidélité: Non<br><br>";
    };
}

?>