<?php

$name_pattern = '/[a-zA-Z]+/';
$email_pattern = '/[a-z\.]+@[a-z\.]+/';
$ape_pattern = '/[a-zA-Z]+/';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (!preg_match($name_pattern, $_POST['nombre'])) {
    $CampoError .= 'nombre, ';
  }
  if (!preg_match($ape_pattern, $_POST['apellido'])) {
    $CampoError .= 'apellido, ';
  }
    
  if (!preg_match($email_pattern, ($_POST['email']))) {
    $CampoError .= 'email, ';
  }
}

if ($CampoError != ""){
  $CampoError = substr($CampoError, 0, -2);
  $CampoError = "(" . $CampoError . ")\n";
}
