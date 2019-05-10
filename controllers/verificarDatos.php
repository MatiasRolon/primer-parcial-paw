<?php

$CampoError = "";

require 'models/validateEncuesta.model.php';

if ($CampoError == "") {
  require 'views/encuestaCompletada.view.php';
  require 'models/persistData.model.php';
} else {
  echo 'Campos erroneos -> ' . $CampoError;
}
