<?php

    include('../Config/db.php');
    //Total de ventas
    $statementTV = $conexion->prepare('select * from vw_totalfacturas');
    $statementTV->execute();
    $totalVentas = $statementTV->fetchAll();

    //Total de facturas del mes actual
    $statementTFMA = $conexion->prepare('select * from vw_FacturasMesActual');
    $statementTFMA->execute();
    $totalFacMes = $statementTFMA->fetchAll();

    //Total de dinero general por sistema
    $statementTDGS = $conexion->prepare('select sum(total) as Total from Detalles_Facturas');
    $statementTDGS->execute();
    $totalDinero = $statementTDGS->fetchAll();

    //Total de productos en el inventario
    $statementTP = $conexion->prepare('select * from vw_totalProductos');
    $statementTP->execute();
    $totalP = $statementTP->fetchAll();

    //Ultimas diez facturas
    $statementULMF = $conexion->prepare('select * from vw_UltimasDiezFacturas');
    $statementULMF->execute();
    $UltimasFacturas = $statementULMF->fetchAll();

?>
