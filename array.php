<html>
3 <head>
4 <title>Como poner PHP en HTML - foreach Ejemplo</title>
5 </head>
6 <body>
7 <?php
8 $empleados = array(‘Ian’ ‘Dario’ ‘Gabriel’ ‘Lucas’ ‘Maru’);
9 ?>
10 <h1>Listado de Empleados</h1>
11 <ul>
12 <?php foreach ($empleados as $empleado) { ?>
13 <li><?php echo $empleado ?></li>
14 <?php } ?>
15 </ul>
</body>
</html>