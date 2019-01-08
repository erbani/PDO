<?php
include 'model/clients.php';
include 'controller/index.php'; 
?>
<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset ="utf-8">
        <title>exercice 1 PDO</title>
    </head>
    <body>
        <h1>exercice 1</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Noms</th>
                    <th>Prenoms</th>
                    <th>Date de naissance</th>
                    <th>Carte de fidelité</th>
                    <th>Numero de Carte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($clientList as $client){?>
                <tr>
                    <td><?= $client->id ?></td>
                    <td><?= $client->lastName ?></td>
                    <td><?= $client->firstName ?></td>
                    <td><?= $client->birthDate ?></td>
                    <td><?= $client->card ?></td>
                    <td><?= $client->cardNumber ?></td>
                </tr>
                <?php } ?>                   
            </tbody>
        </table>
    </body>
</html>