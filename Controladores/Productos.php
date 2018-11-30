<?php

 //Ver------CATEGORIAS----------

 include('../config/db.php');

 $statement = $conexion->prepare('select *  from categorias');
 $statement->execute();
 $dtCategoria = $statement->fetchAll();
 //Ver------PRODUCTOS----------
 $statement2 = $conexion->prepare('select *  from Productos');
 $statement2->execute();
 $dtProductos = $statement2->fetchAll();


function insertarProducto(){

    include('../config/db.php');

    $msj="";

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){



        $id_categoria = $_POST['nuevaCategoria'];
        $Nombre_pro = $_POST['nuevoNombre'];
        $Codigo_pro = $_POST['nuevoCodigo'];
        $Existencia_pro = $_POST['nuevoStock'];

        $CostoxU = $_POST['nuevoCosto'];
        $PrecioxU = $_POST['nuevoPrecio'];


        date_default_timezone_set('America/Santo_Domingo');

        $anio = date('Y');

        $Fecha_registro = $anio;

        $estatus = $_POST['nuevoEstatus'];



        if( !empty($Fecha_registro) ){

            $Fecha_registro = htmlspecialchars($Fecha_registro);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }



        if( !empty($PrecioxU) ){

            $PrecioxU = htmlspecialchars($PrecioxU);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }


        if( !empty($CostoxU) ){

            $CostoxU = htmlspecialchars($CostoxU);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }





        if( !empty($Existencia_pro) ){

            $Existencia_pro = htmlspecialchars($Existencia_pro);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }







        if( !empty($Codigo_pro) ){

            $Codigo_pro = htmlspecialchars($Codigo_pro);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }






        if( !empty($id_categoria) ){

            $id_categoria = htmlspecialchars($id_categoria);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }






        if( !empty($Nombre_pro) ){

            $Nombre_pro = htmlspecialchars($Nombre_pro);
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


        $statement = $conexion->prepare("insert into Productos (Nombre_pro,Status,id_categoria,Codigo_pro,Existencia_pro,CostoxU,PrecioxU,Fecha_registro) values('$Nombre_pro',$estatus,$id_categoria,$Codigo_pro,$Existencia_pro,$CostoxU,$PrecioxU,$Fecha_registro)");
        $statement->execute();

        echo ' <script> window.location = "?ruta=productos"; </script>';

        }else{

            echo '<script>alert("Error!");</script>';

        }
   }

   if(isset( $_POST['GuardarProducto'] )){

    insertarProducto();

  }

/**===============================================================
 *                  EDITAR PRODUCTOS!
 * ===============================================================
 */
function editarProducto(){

    include('../config/db.php');

    $msj="";



    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        $id_categoria = $_POST['editarCategoria'];
        $Nombre_pro = $_POST['editarNombre'];
        $Codigo_pro = $_POST['editarCodigo'];
        $Existencia_pro = $_POST['editarStock'];

        $CostoxU = $_POST['editarCosto'];
        $PrecioxU = $_POST['editarPrecio'];
        $id2 = $_POST['IDedit'];

        date_default_timezone_set('America/Santo_Domingo');

        $anio = date('Y');

        $Fecha_registro = $anio;

        $estatus = $_POST['editarEstatus'];





        if( !empty($Fecha_registro) ){

            $Fecha_registro = htmlspecialchars($Fecha_registro);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }



        if( !empty($PrecioxU) ){

            $PrecioxU = htmlspecialchars($PrecioxU);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }


        if( !empty($CostoxU) ){

            $CostoxU = htmlspecialchars($CostoxU);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }





        if( !empty($Existencia_pro) ){

            $Existencia_pro = htmlspecialchars($Existencia_pro);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }







        if( !empty($Codigo_pro) ){

            $Codigo_pro = htmlspecialchars($Codigo_pro);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }






        if( !empty($id_categoria) ){

            $id_categoria = htmlspecialchars($id_categoria);
            //filter_var($nombreCat, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>La categoria no puede estar vacia</li>";

        }






        if( !empty($Nombre_pro) ){

            $Nombre_pro = htmlspecialchars($Nombre_pro);
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



        $statement = $conexion->prepare("update Productos set Nombre_pro = ('$Nombre_pro'), Status = ($estatus),id_categoria = ($id_categoria),Codigo_pro = ($Codigo_pro),Existencia_pro = ($Existencia_pro),CostoxU = ($CostoxU),PrecioxU = ($PrecioxU),Fecha_registro = ($Fecha_registro) where Id_producto = $id2");
        $statement->execute();

        echo ' <script> window.location = "?ruta=productos"; </script>';

        }else{

            echo '<script>alert("Error!");</script>';

        }
   }

   if(isset( $_POST['EditarProducto'] )){

    editarProducto();

  }

  /*==============================================================
                    ELIMINAR Producto
  ================================================================ */
  function eliminarProducto(){

    include('../config/db.php');

    $id3 = $_POST['IDedit2'];
    //var_dump($id3);
    $statement = $conexion->prepare("delete from Productos where Id_producto = $id3");
    $statement->execute();

    echo ' <script> window.location = "?ruta=productos"; </script>';

   }
   if(isset($_POST['eliminarPro'])){
    eliminarProducto();
}





require_once('../vistas/modulos/productos.php')
?>
