<html>
 <head>
 <title> Incrustar PHP en un archivo .html </title>
 </head>
 <body>
 <?php
 $conex = mysqli_connect("mysql://root:Q02dQFHcfFnnP7VprRur@containers-us-west-121.railway.app:5515/railway","root","Q02dQFHcfFnnP7VprRur","railway");
 if($conex){
    echo "conexion exitosa";
 }
 echo "hoa";
?>
 </body>
 </html>