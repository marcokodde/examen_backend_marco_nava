<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$curl = curl_init('http://localhost/api/index.php');
/** Ingresamos la url de la api o servicio a consumir */
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_POST, true);
/** Autorizamos enviar datos*/
$name = 'test';
/** Datos para  iniciar sesion  */
$pass = 'password';
$my_user = array(
    "username" => $name,
    "password" => $pass
);
$payload = json_encode($my_user);
/** convertimos los datos en el formato solicitado normalmente json*/
curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curl, CURLOPT_COOKIEJAR,  __DIR__ . '/cookies.txt');
/** Archivo para guardar datos de sesion */
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result = curl_exec($curl);
/** Ejecutamos petición*/
curl_close($curl);
