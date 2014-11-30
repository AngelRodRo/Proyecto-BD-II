<?php
ini_set('mssql.charset', 'UTF-8');
$serverName = "KEVIN"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Agencia_Oficial", "UID"=>"sa", "PWD"=>"123456");
$connectionInfo["CHARACTERSET"] = "UTF-8";

$conexion = sqlsrv_connect( $serverName, $connectionInfo);
if($conexion) {
     //echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>