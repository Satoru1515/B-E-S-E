
<?php session_start();

    if(isset( $_SESSION['usuario'] )){

        echo ' <script> window.location.replace("Vistas/plantilla.php"); </script>';

    }else{

       header('Location: controladores/Login.php');

}
?>
