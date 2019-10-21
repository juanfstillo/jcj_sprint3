<?php
//Este archivo representa el conjunto de funciones que controlaran toda la lógica de nuestra propuesta, y de esa forma no la disponemos en nuestras páginas donde tenemos las vistas al usuario.

//Aquí de entrada activo la session, de no hacerlo no se almacenan las variables de sessión del usuario que se loguea
session_start();


//Aquí comienzo a programar las funciones generales de mi sistema
function validar($datos,$imagen){
    //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
    $errores = [];
    $userName = trim($datos['userName']);
    if(empty($userName )){
        $errores['userName']="Completar user";
    }
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email no valido";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="Olvidaste completar tu contraseña";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas no son iguales";
    }
    if(isset($_FILES)){
        $nombre = $imagen['avatar']['name'];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($imagen['avatar']['error']!=0){
            $errores['avatar']="Olvidaste subir tu foto";

        }elseif ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
            $errores['avatar']="Formato de foto inválido, debe ser jpg, jpeg o png";
        }
    }
    return $errores;
}

//Esta función se encarga de validad los datos que el usuario coloca en el formulario de Login
function validarLogin($datos){
    $errores=[];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email no valido";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="Olvidaste completar tu contraseña";
    }
    return $errores;
}

function validarOlvidePassword($datos){
    //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
    $errores = [];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email no valido";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="Olvidaste completar tu contraseña";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
    return $errores;
}

//Esta función nos ayuda a preparar el array asociativo de mi registro
function armarRegistro($datos,$avatar){
    $usuario = [
        'userName' => $datos['userName'],
        'email' => $datos['email'],
        'password' => password_hash($datos['password'],PASSWORD_DEFAULT),
        'avatar'=>$avatar,
        'role'=>1
    ];
    return $usuario;

}
//Función que nos permite guardar los datos en nuestro archivo json y de esa forma persistir los datos dispuestos por el usuario en el formulario

function guardarRegistro($registro){
    $archivoJson = json_encode($registro);
    file_put_contents('usuarios.json',$archivoJson.PHP_EOL,FILE_APPEND);
}
//Esta función nos permite armar el registro cuando el usuario selecciona el avatar
function armarAvatar($imagen){
    $nombre = $imagen['avatar']['name'];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen['avatar']['tmp_name'];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."/imagenes/";
    $avatar = uniqid();
    $archivoDestino = $archivoDestino.$avatar.".".$ext;
    //Aquí estoy copiando al servidor nuestro archivo destino creado
    move_uploaded_file($archivoOrigen,$archivoDestino);
    //Aquí estoy retornando al usuario sólo la imagen, la cual será guardada en el archivo json
    $avatar = $avatar.".".$ext;
    return $avatar;
}

//Esta función la cree para lograr determinar la creación del archivo json, pero ahora con la nueva clave del usuario, ya que el usuairo se le habia olvidado la misma, lo puedo hacer en una sóla función, sin embargo lo realice por separado, para que ustedes lo comprendieran mejor, trabajando todo por parte
function armarRegistroOlvide($datos){
    $usuarios = abrirBaseDatos();

    foreach ($usuarios as $key=>$usuario) {

        if($datos["email"]==$usuario["email"]){
            //Esta línea se las comente para que a futuro puedan probar si la clave nueva la van a grabar coorectamente, la idea es verla antes de hashearla.
            //$usuario["password"]= $datos["password"];
            $usuario["password"]= password_hash($datos["password"],PASSWORD_DEFAULT);
            $usuarios[$key] = $usuario;
        }
        $usuarios[$key] = $usuario;
    }

    //Esto se los coloque para que sepan que con esta función podemos borrar un archivo
    unlink("usuarios.json");
    foreach ($usuarios as  $usuario) {
        $jsusuario = json_encode($usuario);
        file_put_contents('usuarios.json',$jsusuario. PHP_EOL,FILE_APPEND);
    }

//Esta función no retorna nada, ya que su  responsabilidad es guardar al usuario, pero con su nueva contraseña
}

//Función que nos permite buscar por email, a ver si el usuario existe o no en nuestra base de datos, que ahorita es un archivo json.
function buscarPorEmail($email){
    $usuarios = abrirBaseDatos();
    if($usuarios !=null){
        foreach ($usuarios as  $usuario) {
            if($email === $usuario['email']){
                return $usuario;
            }
        }
    }
    return null;
}

//Esta función abre nuestro archivo json y lo prepara para eliminar el último registro en blanco y además, fijese que además genero el array asociativo del mismo. Convierto de json a array asociativo para mas adelante con la funcion "bucarEmail" poder recorrerlo y verificar si el usuario existe o no en mi base de datos, dicha verificación la hago por el email del usuario, ya que es el dato único que tengo del usuario
function abrirBaseDatos(){
    if(file_exists('usuarios.json')){
        $archivoJson = file_get_contents('usuarios.json');
        //Aquí lo que hago es generar cada array con un salto de linea, para poderlo ver ejecute aquí un dd($archivoJson)
        $archivoJson = explode(PHP_EOL,$archivoJson);
        //Aquí saco el ultimo registro, el cual está en blanco
        //ejecute aquí un ($archivoJson), la idea es para que verifique como se va armando el archivo
        array_pop($archivoJson);
        //ejecute aquí un ($archivoJson), la idea es para que verifique como se va armando el archivo

        //Aquí recorro el array y creo mi array con todos los usuarios
        foreach ($archivoJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }
        //Aquí retorno el array de usuarios con todos sus datos
        return $arrayUsuarios;
    }else{
        return null;
    }
}
//Aqui creo los las variables de session y de cookie de mi usuario que se está loguendo
function seteoUsuario($usuario,$dato){
    $_SESSION['nombre']=$usuario['userName'];
    $_SESSION['email']=$usuario['email'];
    $_SESSION['avatar']=$usuario['avatar'];
    $_SESSION['role']=$usuario['role'];
    if(isset($dato['recordarme'])){
        setcookie('email',$usuario['email'],time()+3600);
        setcookie('password',$dato['password'],time()+3600);
    }
}
//Con esta función controlo si el usuario se logueo o ya tenemos las cookie en la máquina
function validarUsuario(){
    if(isset($_SESSION['email'])){
        return true;
    }elseif(isset($_COOKIE['email'])){
        $_SESSION['email']=$_COOKIE['email'];
        return true;
    }else{
        return false;
    }
}
