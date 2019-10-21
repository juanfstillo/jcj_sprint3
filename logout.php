<?php
//Este es el programa que se encarga de destruir todas las variables de sessión que tenemos en el servidor y sólo por prueba tambien destruyo las cookies, sin embargo les recuerdo que lo hago sólo para que vean que esto lo podemos hacer, ya que por lo general no sacamos las cookies que ya guardamos en la maquina del usuario (En su navegador)
session_start();
session_destroy();

//Coloque esto en comentario para perdurar las cookies en el navegador del usuario
//setcookie('email',"",time()-1);
//setcookie('password',"",time()-1);
header('location:login.php');
exit;