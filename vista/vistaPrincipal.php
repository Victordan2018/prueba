<?php 
require 'header.php';
?>
<body>
  
<div class="container" align="center">
      <div> 
      </div>
      <div> 
      </div>  
      <div class="div-3">
      <form id="formu" name="formu" method="POST" action="?controller=Principal&action=etc" autocomplete="off">

      <h4>Nombre completo:</h4>
      <input  type="text" id="nombre" name="nombre" pattern="[a-zA-Z0-9]{2,254}">
      <br>
      <h4>Edad:</h4>
      <input type="number" title="Edad valida de 1 a 100 años"  id="edad" step="1" name="edad" min="1" max="100" >
      <br>
      </p>
      <h4>E-mail:</h4>
      <input  type="email" id="email" name="email" title="El formato requerido es: usuario@dominio" >
      <br>
      <h4>Teléfono:</h4>
      <input type="tel" id="telefono" name="telefono" minlength="10" maxlength="12" 
      pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Un numero de telefono valido consiste en los 3 digitos del codigo de area encerrados, despues 3 digitos y al ultimo 4 digitos de tu numero telefonico Ejemplo: 001-123-4567" >
      <br>
      <h4>Ultimo grado de estudios:</h4>
      <select id="select"  name="grado" required>
        <option value="Primaria" selected>Primaria</option>  
        <option value="Secundaria">Secundaria</option>
        <option value="Preparatoria">Preparatoria</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="N/E">No especificar</option>
      </select>
      <br>
      <br>
      <input class="btn_usuario" name="submit" type="submit">
      </form>
    </div><!--segundo div-->
    <div>
      <?php 
      //se imprimen los valores de los errores
      if(isset($errores)){ 
      foreach ($errores as $error){
        ?><h5><?php echo $error;?></h5>
        <br>
        <?php
        }
      }else{
      }
      ?>
    </div>
   </div><!--container-->
  <?php 
require 'footer.php';
?>