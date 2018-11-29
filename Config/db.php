<?php

    try{

        $conexion = new PDO("sqlsrv:server=WINDOWS-H3LRFT0\SQLSERVER; Database=SISFAC", "ADMINAPI", "12345");

    }catch( PDOException $e ){

        echo 'Error: '.$e->getMessage();

    }

?>