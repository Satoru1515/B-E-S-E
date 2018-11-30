<?php

 include('../config/db.php');



 //Ver------CLIENTES----------
 $statement = $conexion->prepare('select *  from Clientes');
 $statement->execute();
 $dtClientes = $statement->fetchAll();





 /**===================================
  *         INSERTAR CLIENTES
  * ======================================
  */
function insertarClientes(){

    include('../config/db.php');

    $msj="";

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

      

        $cedula = $_POST['nuevaCedula'];
        $Nombre = $_POST['nuevoNombre'];
        $Apellido = $_POST['nuevoApellido'];
        $Genero = $_POST['nuevoGenero'];
        $Nacionalidad = $_POST['nuevaNacionalidad'];

        $Fecha_Nac = 1999;
        


        date_default_timezone_set('America/Santo_Domingo');

        $anio = date('Y');
        $Hora = date('H');
        $minutos = date('i');

        $Fecha_registro = $anio;
        $Hora_ingreso = $Hora.":".$minutos;
        
        $estatus = $_POST['nuevoEstatus'];




        if( !empty($estatus) ){

            $estatus = htmlspecialchars($estatus);
            $cedula = htmlspecialchars($cedula);
            $Nombre = htmlspecialchars($Nombre);
            $Apellido = htmlspecialchars($Apellido);
            $Genero = htmlspecialchars($Genero);
            $Nacionalidad = htmlspecialchars($Nacionalidad);
            $Fecha_registro = htmlspecialchars($Fecha_registro);
            $Hora_ingreso = htmlspecialchars($Hora_ingreso);
            
            //filter_var($estatus, 'FILTER_SANITIZE_STRING');

        }else{

            $msj .="<li>Completa los Campos</li>";

        }

    
        $statement = $conexion->prepare("insert into Clientes (Cedula, Nombre, Apellido, Genero, Nacionalidad, Fecha_Nac, Fecha_Ing, Hora_Ingreso, Status) values($cedula,'$Nombre','$Apellido','$Genero','$Nacionalidad',$Fecha_Nac,$Fecha_registro,'$Hora_ingreso',$estatus)");
        $statement->execute();

        echo ' <script> window.location = "?ruta=clientes"; </script>';

        }else{

            echo '<script>alert("Error!");</script>';

        }
   }

   if(isset( $_POST['GuardarClientes'] )){

    insertarClientes();

  }


/**==================================
 *          ELIMINAR CLIENTE
 ====================================*/


  function eliminarCli(){

    include('../config/db.php');

    $id3 = $_POST['elimID'];
 
    $statement = $conexion->prepare("delete from Clientes where ID_Cliente = $id3");
    $statement->execute();

    echo ' <script> window.location = "?ruta=clientes"; </script>';

   }
   if(isset($_POST['eliminarCli'])){
    eliminarCLi();
}


require_once('../vistas/modulos/clientes.php')
?>