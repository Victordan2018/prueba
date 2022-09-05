<?php 
require 'header.php';
?>
<body>
	<table border='1'>
		<tr>			
			<td><a href="?controller=Principal&action=index">Insertar usuario</a></td>
			<td><a href="?controller=Api&action=index">Ver API</a></td>
		</tr>
	</table>
	<?php require_once 'routes.php'; ?>
<?php 
require 'footer.php';
?>