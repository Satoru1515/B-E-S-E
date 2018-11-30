<?php session_start();

include('../config/db.php');
try{

    $msj="";

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        $usuario = $_POST['usuario'];
        $pass = $_POST['password'];

        if( !empty( $usuario ) && !empty( $pass ) ){

            $usuario = htmlspecialchars($usuario);
            $pass = htmlspecialchars($pass);

            //$usuario = filter_var($usuario, 'FILTER_SANITIZE_STRING');
            //$pass = filter_var($pass, 'FILTER_SANITIZE_STRING');

            $usuario = strtolower($usuario);

            //$conexion = new PDO("sqlsrv:server=WINDOWS-H3LRFT0\SQLSERVER; Database=SISFAC", "ADMINAPI", "12345");
            $statement = $conexion->prepare("select * from Usuarios where Nombre = '$usuario' and clave = '$pass'");
            $statement->execute();
            $credenciales = $statement->fetchAll();

            if($credenciales){

                foreach($credenciales  as $cred){

                    $_SESSION['usuario'] = array('nombre' => $cred['Nombre'],
                                                  'imagen'=>$cred['img'],
                                                    'nivel'=>$cred['Nivel']);

                }

                header("Location:../index.php");

            }else{

                $msj .= "<li>usuario o password son incorrecto</li>";

            }

        }else{

            $msj .= "<li>Dejaste algun campo vacio</li>";

        }

    }




}catch( PDOException $e ){

    echo 'Error:'.$e->getMessage();

}

require_once('../vistas/modulos/login.php');

?>
