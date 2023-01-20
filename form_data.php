<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
    $apellido = isset($_REQUEST['apellido']) ? $_REQUEST['apellido'] : null;
    $genero = isset($_REQUEST['genero']) ? $_REQUEST['genero'] : null;
    $bootcamps = isset($_REQUEST['bootcamp']) ? $_REQUEST['bootcamp'] : null;
    $contraseña = isset($_REQUEST['contrasena']) ? $_REQUEST['contrasena'] : null;
    $estado = isset($_REQUEST['estado']) ? $_REQUEST['estado'] : null;
    $comentarios = isset($_REQUEST['comentarios']) ? $_REQUEST['comentarios'] : null;

    // echo " : $ <br/>";
    echo "Nombre: $nombre <br/>";
    echo "Apellido: $apellido <br/>";
    echo "Genero: $genero <br/>";
    echo 'Bootcamp: <br/> <br/>';
?>
    <ul>
        <?php 
            foreach ($bootcamps as $bootcamp) {
                echo "<li> $bootcamp </li>";
            }
        ?>
    </ul>
<?php
  
    echo '<br/> <br/>';

    echo "Contraseña: $contraseña <br/>";
    echo "Comentarios: $comentarios <br/>";

    $directorio = 'archivos_subidos/';

    // primer botón archivo subido
    $archivo = $directorio . basename($_FILES['archivoSubido']['name']);
    move_uploaded_file($_FILES['archivoSubido']['tmp_name'], $archivo);

    // añadir ID al nombre de la imagen
    $archivo1 = $directorio . basename($_FILES['archivoSubido1']['name']);
    $nombreArchivo1 = $_FILES['archivoSubido1']['name'];
    $nuevoNombreArchivo1 = md5(time() . $nombreArchivo1) . '-' . $nombreArchivo1;
    $directorio_path1 = $directorio . $nuevoNombreArchivo1;
    move_uploaded_file($_FILES['archivoSubido1']['tmp_name'], $directorio_path1);

    // Chequear si la imagen ya existe en la BD
    $archivo2 = $directorio . basename($_FILES['archivoSubido2']['name']);
    $nombreArchivo2 = $_FILES['archivoSubido2']['name'];
    $nuevoNombreArchivo2 = md5(time() . $nombreArchivo2) . '-' . $nombreArchivo2;
    $directorio_path2 = $directorio . $nuevoNombreArchivo2;
    if (file_exists($archivo2)) {
        move_uploaded_file($_FILES['archivoSubido2']['tmp_name'], $directorio_path2);
    } else {
        move_uploaded_file($_FILES['archivoSubido2']['tmp_name'], $archivo2);
    }

    //imprimir array de imagenes
    echo '<br/>';
    foreach ($_FILES as $arrayImagen) {
        print_r($arrayImagen);
        echo '<br/>';
    }
}
