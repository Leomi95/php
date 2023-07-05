<html>
 <head>
 <title>Como poner PHP en HTML - foreach Ejemplo</title>
 </head>
 <body>
 <?php
 $empleados = array('Ian','Dario','Gabriel','Lucas','Mar');
 ?>
 <h1>Listado de Empleados</h1>
 <ul>
 <?php foreach ($empleados as $empleado) { ?>
 <li><?php echo $empleado ?></li>
 <?php } ?>
 </ul>
</body>
</html>