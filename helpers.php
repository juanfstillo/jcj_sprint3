<?php
//Este archivo representa, la disposición de un conjunto de pequeñas funciones que vamos a estar usando a lo largo de nuestra aplicación



//Esta función me ayuda para la persistencia de los datos en el formulario, sólo si los datos dispuestos por el usuario estan correctos, es decir si ese campo pasa nuestras validaciones
function old($dato){
    if(isset($_POST[$dato])){
        return $_POST[$dato];
    }
}


//Esta función simula a la función (dd), de Laravel la cual simplemente es un dump and die (var_dump)

function dd($dato){
    echo "<pre>";
        var_dump($dato);
        exit;
    echo "</pre>";
}