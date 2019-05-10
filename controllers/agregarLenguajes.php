<?php

$db = new DatabaseFile;
$key = $db->getLastId();
for ($i=$key; $i > 0; $i--) {
  $obj = (array) $db->get($i);
    
  $auto_radios .= "<br> <label for='" . $obj['otroLenguaje'] . "'>" . $obj['otroLenguaje'] . "<input name='lenguaje' type='radio' value='" . $obj['otroLenguaje'] . "' > </label>";  
}

?> 
