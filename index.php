<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Form</title>
</head>
<body>
    <div class= "form-contenedor">
    <Form action="form_data.php" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nombre" class="titulos">Nombre</label>
                <input id="nombre" type="text" name="nombre" placeholder="Nombre">
            </li>
            <li>
                <label for="apellido" class="titulos">Apellido</label>
                <input id="apellido" type="text" name="apellido"  placeholder="Apellido">
            </li>
        </ul>

        <fieldset>
            <legend>Genero</legend>

              <label for="femenino" class="genero" ><input type="radio" id="femenino" name="genero" value="femenino" >femenino</label>
              <label for="masculino" class="genero" ><input type="radio" id="masculino" name="genero" value="masculino">masculino</label>
              <label for="transgénero" class="genero" ><input type="radio" id="transgénero" name="genero" value="transgénero">transgénero</label>
              <label for="binario" class="genero" ><input type="radio" id="binario" name="genero" value="binario">binario</label>
              <label for="noBinario" class="genero" ><input type="radio" id="noBinario" name="genero" value="no binario">no binario</label>
              <label for="otro" class="genero" ><input type="radio" id="otro" name="genero" value="otro" checked>otro</label>
              <label for="noQuieroResponder" class="genero" ><input type="radio" id="noQuieroResponder" name="genero" value="no quiero responder">no quiero responder</label>

        </fieldset>

        <fieldset>
            <legend>Bootcamp</legend>
            <ul>
                <li>
                    <input type="checkbox" id="frontEnd" name="bootcamp[]" value="frontEnd">
                    <label for="frontEnd" class="bootcamp">Front-end</label>
                </li>
                <li>
                    <input type="checkbox" id="fullStack" name="bootcamp[]" value="fullStack">
                    <label for="fullStack" class="bootcamp">Full-stack</label>
                </li>
                <li>
                    <input type="checkbox" id="femCoders" name="bootcamp[]" value="femCoders">
                    <label for="femCoders" class="bootcamp">FemCoders</label>
                </li>
            </ul>
            
        </fieldset>

        <label for="contraseña" class="titulos">Contraseña</label>
        <input type="password" id="contraseña" name="contrasena" class="caja-texto">
       
        <fieldset>
            <legend>Estado</legend>
            <div>
                <select name="estado" id="estado">
                    <option value="aprobado">Aprobado</option>
                    <option value="reprobado">Reprobado</option>
                    <option value="abandono">Abandono</option>
                </select>
            </div>
        </fieldset>

        <label for="comentarios" class="titulos">Comentarios</label>
        <textarea name="comentarios" id="comentarios" cols="30" rows="5" placeholder="Escriba un comentario"></textarea>

        <label for="archivo1" class="titulos">Archivo</label>
        <input type="file" name="archivoSubido" id= "archivo1">

        <label for="archivo2" class="titulos">Archivo cambiando ID</label>
        <input type="file" name="archivoSubido1" id= "archivo2">

        <label for="archivo3" class="titulos">Archivo validando si existe en la BD</label>
        <input type="file" name="archivoSubido2" id= "archivo3">

        <input type="submit" value="Enviar" />
    </Form>

    </div>
</body>
</html>
