<?php
$serverName = "KEVIN"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Agencia_Oficial", "UID"=>"sa", "PWD"=>"123456");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>