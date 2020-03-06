<?php
class Conexion {
    public function get_conexion(){
        $user = "postgres";
        $pass = "12345";
        $host = "localhost";
        $db = "agro_INIAP";
        $conexion =  new PDO("pgsql:host=$host;dbname=$db;",$user,$pass);
        return $conexion; //cadena de conexion
    }
}
 
?>


