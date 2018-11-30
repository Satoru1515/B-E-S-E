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

/*==========================================
        EDITAR CATEGORIAS
=================================================*/ 

function UpdateCat(){

    $idc = $_POST['editarID'];
    $nombre1 = $_POST['editarCategoria'.$idc.''];
    $estatus1 = $_POST['editarEstatus'.$idc.''];
    



    if( !empty($nombre1) ){
        $nombre1 = htmlspecialchars($nombre1);
        //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');
    }else{
        $msj .="<li>La categoria no puede estar vacia</li>";
    }
    if( !empty($estatus1) ){
        $estatus1 = htmlspecialchars($estatus1);
        //filter_var($estatus, 'FILTER_SANITIZE_STRING');
    }else{
        $msj .="<li>El estatus no puede estar vacia</li>";
    }

    include('../config/db.php');

    $statement = $conexion->prepare("update Categorias set categoria = ('$nombre1') , StatusCategory = ($estatus1) where ID_Categoria = $idc");
    $statement->execute();

    echo ' <script> window.location = "?ruta=categorias"; </script>';
}



if(isset( $_POST['editarID'] )){

    UpdateCat();

  }

/*==========================================
        ACTIVAR Y DESACTIRVAR CATEGORIAS
=================================================*/ 

function UpdateActDes(){

    include('../config/db.php');

    $idc = $_POST['editarID2'];
    $nombre11 = $_POST['editarIM'];
    $estatus1 = $_POST['editarIE'];      

    if( !empty($nombre11) ){
        $nombre11 = htmlspecialchars($nombre11);
        //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');
    }else{
        $msj .="<li>La categoria no puede estar vacia</li>";
    }

    if($estatus1 == 1){
        $statement = $conexion->prepare("update Categorias set categoria = ('$nombre11') , StatusCategory = (0) where ID_Categoria = $idc");
        $statement->execute();
    
        echo ' <script>
         window.location = "?ruta=categorias"; </script>';
    }
    if($estatus1 == 0){
        $statement = $conexion->prepare("update Categorias set categoria = ('$nombre11') , StatusCategory = (1) where ID_Categoria = $idc");
        $statement->execute();
    
        echo ' <script>
        window.location = "?ruta=categorias"; </script>';
    }   
}
if(isset( $_POST['editarIM'] )){

    UpdateActDes();

  }












    require_once('../vistas/modulos/categorias.php')

?>