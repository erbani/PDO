<?php
//Instenciation de l'objet clients. 
//$client devient une instance de la classe client.
//la methode magique construct est appelée automatiquement 
//grace au mot clé new.
$clients= new clients();
$clientList=$clients->getClientList();
?>

