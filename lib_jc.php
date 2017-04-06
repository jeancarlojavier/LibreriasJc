<?php session_start();
// Base de datos
// Conectar a la base de datos
function db_connect($host, $database, $user, $password){
  try {
    $conexion = new PDO("mysql:host=$host;dbname=$database", "$user", "$password");
  } catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    die();
  }
  return $conexion;
}

// Consultar de la base de datos
function C_id($conexion, $id, $print_r){
  $id;
  $print_r;
  $statements = $conexion->prepare("SELECT * FROM registros WHERE ID_usuario = :usuario");
  $statements->execute(array(":usuario" => $id));
  $resultado = $statements->fetchAll();
  if (!$print_r) {

  }else {
    print_r ($resultado);
  }
}

// Sesiones
// function R_session($urlTrue, $urlFalse){
//   if (isset($_SESSION["usuario"])) {
//     // header("Location: $urlTrue");
//     echo "true";
//   }else {
//     // header("Location: $urlFalse");
//     echo "false";
//   }
// }

 ?>
