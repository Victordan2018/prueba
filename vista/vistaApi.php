<?php 
include 'header.php';
?>
<body>
<div class="container" align="center">  
<?php
//aqui se imprime el arreglo que hice al momento de bajar la info de la api. Se hace con la instrucción foreach
foreach ($arreglo["gatitos"] as $dato) {
  ?><h4><?php echo "Fact: ".$dato['fact'];
  ?></h4>
  <br>
  <h4><?php echo "Lengtt: ".$dato['length']; 
  ?></h4><br>
  <?php
}
 
?>
</div><!--container-->
  <?php 
include 'footer.php';
?>