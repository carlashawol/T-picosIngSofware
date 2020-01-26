

<?php
require 'db.php';
 $message = '';

if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
  $sql = "INSERT INTO nombres (nombre, apellido) VALUES (:nombre, :apellido)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':apellido',$_POST['apellido'] );

  if ($stmt->execute()) {
    $message = 'Su nombre fue registrado correctamente';
  } else {
    $message = 'Su nombre no fue registrado correctamente';
  }
}

?>
<?php if(!empty($message)){

  echo $message;
}
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a tu app</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <h1>Registrate!</h1>
    <form action="index.php" method="post">
      <input type="text" name="nombre" placeholder="Ingresa tu nombre"/>
      <input type="text" name="apellido" placeholder="Ingresa tu apellido"/>
      <input type="submit" name="submit"/><br>
    </form>
    <a href="lista.php">Ver lista de los nombres registrados</a>

  </body>
</html>
