<?php

//-> Obtiene Clase de 'core/DatabaseFile.php'
// Hace uso de la API definida para persistir un objeto en formato JSON

$db = new DatabaseFile;
$id = $db->getLastId();
$db->put($id+1, $_POST);
$db->save();

?>


