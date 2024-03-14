<?php


//AQUI PODEMOS ENVIAR LOS DATOS COMO PARAMETROS A LA FUNCION NO SE HA INTENTADO



function agregarProductos() {
    require_once "../clases/conexion/conexion.php";
    $mysqli = obtenerConexion();
  
    


  //  $nombre = $_POST['name'];
  //  $descripcion = $_POST['description'];
   // $precio = $_POST['price'];

    
    $sql = "INSERT INTO products (name, description, price) VALUES ('ho', 'sef', '23')";
    
  
    if ($mysqli->query($sql) === TRUE) {
        
        return json_encode(array('message' => 'Producto agregado exitosamente.'));
    } else {
       
        return json_encode(array('error' => 'Error al agregar el producto: ' . $mysqli->error));
    }
}


// aqui se valida el tipo de solicitud
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
   echo agregarProductos();
}



?>
