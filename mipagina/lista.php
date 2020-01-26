<?php
$con=mysqli_connect('localhost','root','','database');

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Bienvenido a tu app</title>
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/other.css">
   </head>
   <body>
     <h1>Lista de personas registradas</h1>
     <br>
      <table border="1" >
         <tr>
           <td>Id</td>
           <td>Nombre</td>
           <td>Apellido</td>
         </tr>

         <?php
         $sql="SELECT * from nombres";
         $result=mysqli_query($con,$sql);

         while($mostrar=mysqli_fetch_array($result)){
          ?>

         <tr>
           <td><?php echo $mostrar['id'] ?></td>
           <td><?php echo $mostrar['nombre'] ?></td>
           <td><?php echo $mostrar['apellido'] ?></td>
         </tr>
       <?php
       }
        ?>
       </table>
       <br>
       <br>
        <a href="index.php">Regresar</a>
   </body>
 </html>
