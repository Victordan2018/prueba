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
      <table id="tabla1" class="default">
            <tr>
              <th>Nombre</th>
              <th>Edad</th>
              <th>Correo</th>
              <th>Numero telefono</th>
              <th>Estudios</th>
            </tr>
            <tr>
              <td><h4><?php if(isset($datosCorrectos)){
              /*se imprime el valor de*/echo $datosCorrectos['nombre'];?></h4></td>
              <td><h4><?php /*se imprime el valor de*/echo $datosCorrectos['edad'];?></h4></td>
              <td><h4><?php /*se imprime el valor de*/echo $datosCorrectos['correo'];?></h4></td>
              <td><h4><?php /*se imprime el valor de*/echo $datosCorrectos['telefono'];?></h4></td>
              <td><h4><?php /*se imprime el valor de*/echo $datosCorrectos['grado'];}?></h4></td>
            </tr>
      </table>
    </div>
   </div><!--container-->
  <?php 
require 'footer.php';
?>