<!DOCTYPE html>
<html lang="es">
<head>
  <title><?= $title ?></title>
  <meta charset="utf-8" />
  <link href="statics/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Encuesta Programacion</h1>
  <form action="/verificar-datos" method="post" name="formulario" enctype="multipart/form-data">
    <fieldset>
      <div class="field">
        <label for="nombre">Nombre: </label>
        <input name="nombre" type="text" required="required" maxlength=30 />
      </div>
      <div class="field">
        <label for="apellido">Apellido: </label>
        <input name="apellido" type="text" required="required" maxlength=30 />
      </div>
      <div class="field">
        <label for="email" >Email: </label>
        <input name="email" type="email" required="required" />
      </div>
    <br>
      <div class="field">
        <label for="lenguaje" >Ingrese su lenguaje favorito: </label>
        
        <br>
        <label for="java" >Java 
            <input name="lenguaje" type="radio" value="java" >
        </label>    
        <br>
        <label for="javascript" >Javascript   
            <input name="lenguaje" type="radio" value="javascript" >
        </label>
        <br>
        <label for="c" >C   
            <input name="lenguaje" type="radio" value="c" >
        </label>
        
        <?php require 'controllers/agregarLenguajes.php' ?>
        <?php echo $auto_radios ?>
        <br>
        <label class="LabelOtro" for="otro" >Otro   
            <input  id="otro" name="lenguaje" type="radio" value="otro" >
        </label>
    </div>
         
      <div class="field">
        <label for="otroLenguaje" >Cual?
        <input name="otroLenguaje" type="text" required="required" />
         </label>
      </div>

      <input  class="controls" type="submit" value="Enviar">
      <input  class="controls" type="reset" value="Resetear">
    </fieldset>
  </form>
</body>
</html>
