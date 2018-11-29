<?php

   function insertarCategoria(){

    include('../config/db.php');

    $msj="";

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        $nombreCat = $_POST['nuevaCategoria'];
        $estatus = $_POST['nuevoEstatus'];

        if( !empty($nombreCat) ){

            $nombreCat = htmlspecialchars($nombreCat);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }

        if( !empty($estatus) ){

            $estatus = htmlspecialchars($estatus);
            //filter_var($estatus, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>El estatus no puede estar vacia</li>";

        }

    
        $statement = $conexion->prepare("insert into Categorias (categoria,StatusCategory) values('$nombreCat',$estatus)");
        $statement->execute();

        echo ' <script> window.location = "?ruta=categorias"; </script>';

        }
   }

   function eliminarCategoria(){

    include('../config/db.php');

    $id = $_POST['eliminar'];
    var_dump($id);
    $statement = $conexion->prepare("delete from Categorias where ID_Categoria = $id");
    $statement->execute();

    echo ' <script> window.location = "?ruta=categorias"; </script>';

   }


 //Ver------------------------------------------------------

    include('../config/db.php');

    $statement = $conexion->prepare('select *  from categorias');
    $statement->execute();
    $dtCategoria = $statement->fetchAll();

//-----------------------------------------------------------

   if(isset( $_POST['GuardarCategoria'] )){

     insertarCategoria();

   }

   if(isset($_POST['eliminar'])){
    eliminarCategoria();
}

    require_once('../vistas/modulos/categorias.php')

?>