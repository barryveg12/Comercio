<?php


function obtenerProductos() {
    require_once "../clases/conexion/conexion.php";
    $conexion = obtenerConexion();
  
    $sql = "SELECT * FROM products";
    $resultado = mysqli_query($conexion, $sql);

    $productos = array();
    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $productos[] = $fila;
        }
    } else {
        echo json_encode(array('message' => 'No se encontraron productos.'));
    }

    mysqli_close($conexion);

   

    return json_encode($productos); 
}




function obtenerHerramientas() {
    require_once "../clases/conexion/conexion.php";
    $conexion = obtenerConexion();
  
    $sql = "SELECT * FROM herramientas";
    $resultado = mysqli_query($conexion, $sql);

    $herramientas = array();
    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $herramientas[] = $fila;
        }
    } else {
        echo json_encode(array('message' => 'No se encontraron herramientas.'));
    }

    mysqli_close($conexion);

    return json_encode($herramientas); 
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    $nombre_funcion = $_GET['find'];

    
    if ($nombre_funcion === 'obtener_productos') {
        echo obtenerProductos();
    } elseif ($nombre_funcion === 'obtener_herramientas') {
        echo obtenerHerramientas();
    } else {
        echo json_encode(array('error' => 'Función no válida.'));
    }
}

?>
