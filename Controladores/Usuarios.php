<?php

function ver(){

  include('../config/db.php');
  $statement = $conexion->prepare("select * from Usuarios");
  $statement->execute();
  $usuarios = $statement->fetchAll();

  foreach ($usuarios as $usuario) {

    $nivel="";
    if($usuario['Nivel']==1){
      $nivel = "Administrador";
    }elseif ($usuario['Nivel']==0) {
      $nivel = "Vendedor";
    }
    echo '

    <tr>
    <td>'.$usuario['Id_usuario'].'</td>
    <td>'.$usuario['Nombre'].'</td>
    <td>'.$nivel.'</td>
    <td><img src="'.$usuario['img'].'" width="40px" alt=""></td>

    <td>
      <div class="btn-group">
        <button class="btn btn-warning " data-toggle="modal" data-target="#'.$usuario['Id_usuario'].'" ><i class="fa fa-pencil"></i></button>
        <form class="" action="" method="post">
        <input type="text" class="form-control input-lg hidden" value="'.$usuario['Id_usuario'].'" name="iden2" value="" readonly>
          <button class="btn btn-danger " name="borrar" value="'.$usuario["Id"].'"><i class="fa fa-times"></i></button>
        </form>
      </div>
    </td>
    </tr>

';



echo '



<!--=====================================

MODAL EDITAR USUARIO

======================================-->
<div id="'.$usuario['Id_usuario'].'" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form method="post">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar usuario</h4>
      </div>
      <!--=====================================

      CUERPO DEL MODAL

      ======================================-->
      <div class="modal-body">
        <div class="box-body">
          <!-- ENTRADA PARA EL USUARIO -->
           <div class="form-group">
            <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" id="editarUsuario" value="'.$usuario['Nombre'].'" name="editarUsuario" value="" readonly>
              <input type="text" class="form-control input-lg hidden" id="editarUsuario" value="'.$usuario['Id_usuario'].'" name="iden" value="" readonly>
            </div>
          </div>
          <!-- ENTRADA PARA LA CONTRASEÑA -->
         <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="text" class="hidden" value="'.$usuario["img"].'" name="editarFoto2" readonly>
              <input type="password" class="form-control input-lg" name="editarPassword" value="'.$usuario["Clave"].'" placeholder="Escriba la nueva contraseña">
              <input type="hidden" id="passwordActual" name="passwordActual">
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="editarEstatus">
                <option value="">Selecionar perfil</option>
                <option value="1">Administrador</option>
                <option value="0">Vendedor</option>
              </select>
            </div>
          </div>
           <!-- ENTRADA PARA SELECCIONAR SEMPLEADO -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="editarPerfil" required>
                <option value="">Selecionar Empleado</option>';
                 listaEmplado();
                echo'
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->
           <div class="form-group">
            <div class="panel">SUBIR FOTO</div>

            <input type="file" class="nuevaFoto" name="foto">
            <p class="help-block">__</p>

            <img src="img/user.png" class="img-thumbnail previsualizar" width="100px">
          </div>
        </div>';
         if(!empty($m)) :
        echo '<div class="alert alert-warning">';

      echo '</div>';
         endif;
     echo '</div>';

   echo '
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <input type="submit" class="btn btn-primary" name="EditarU" value="Guardar cambios">
      </div>
    </form>
  </div>
</div>
</div>


';
  }


}

function eliminar(){
  include('../config/db.php');

  $id = $_POST['iden2'];
  var_dump($id);
  $statement = $conexion->prepare("delete from Usuarios where id_usuario = $id ");
  $statement->execute();

}

function listaEmplado(){

  include('../config/db.php');

  $statement = $conexion->prepare("select Id_empleado, Nombres, Apellidos from Empleados");
  $statement->execute();
  $empleados = $statement->fetchAll();

  foreach ($empleados as $empleado) {

    $nombre = strtoupper($empleado['Nombres']);
    $apellido = strtoupper($empleado['Apellidos']);
    $nombreCompleto = $nombre.' '.$apellido;
    echo <<<str
            <option value="{$empleado['Id_empleado']}">{$nombreCompleto}</option>
str;
  }

}
/**==========================================
 *               GUARDAR USUARIOS
 * ==========================================
 */
  function guardar(){

    include('../config/db.php');
    $msj="";

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

      $usuario = $_POST['usuario'];
      $clave = $_POST['password'];
      $estatus = $_POST['estatus'];
      $empleado = $_POST['empleado'];
      $imagen = 'img/'.$_POST['foto'];

      if( !empty( $usuario ) ){

          $usuario = htmlspecialchars( $usuario );
          $usuario = trim( $usuario );
          $user = filter_var( $usuario, FILTER_SANITIZE_STRING );
          $user = strtolower( $user );

      }else {

          $msj .= "<li>El campo usuario no puede estar vacio</li>";

      }

      if( !empty( $clave ) ){

          $clave = htmlspecialchars( $clave );
          $clave = trim( $clave );


      }else {

          $msj .= "<li>El campo password no puede estar vacio</li>";

      }

      if ( empty( $estatus ) ) {

          $msj .= "<li>El usuario no se puede crear sin perfil</li>";

      }

      if ( empty( $empleado ) ) {

          $msj .= "<li>No ha seleccionado el empleado</li>";

      }

      $statement = $conexion->prepare("insert into Usuarios (Id_empleado,Nombre,Clave,Nivel,img)
      values($empleado,'$user','$clave',$estatus,'$imagen')");
      $statement->execute();

    }


  }


if( isset( $_POST['borrar'] ) ) {
    eliminar();
}

if ( isset( $_POST['btnGuardar'] ) ) {
    guardar();
}
/**==========================================
 *               EDITAR USUARIOS
 * ==========================================
 */
function EditarU(){

  include('../config/db.php');
  $msj="";

  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $usuario = $_POST['editarUsuario'];
    $clave = $_POST['editarPassword'];
    $estatus = $_POST['editarEstatus'];
    $empleado = $_POST['editarPerfil'];
    $idu = $_POST['iden'];

   // if(!empty($_POST['editarFoto2'])){

     // $imagen = $_POST['editarFoto2'];
    //}
    if($_POST['foto'] == ""){
      $imagen = $_POST['editarFoto2'];

    }else{
      $imagen = 'img/'.$_POST['foto'];
    }


    if( !empty( $usuario ) ){

        $usuario = htmlspecialchars( $usuario );
        $usuario = trim( $usuario );
        $user = filter_var( $usuario, FILTER_SANITIZE_STRING );
        $user = strtolower( $user );

    }else {

        $msj .= "<li>El campo usuario no puede estar vacio</li>";

    }

    if( !empty( $clave ) ){

        $clave = htmlspecialchars( $clave );
        $clave = trim( $clave );


    }else {

        $msj .= "<li>El campo password no puede estar vacio</li>";

    }

    if ( empty( $estatus ) ) {

        $msj .= "<li>El usuario no se puede crear sin perfil</li>";

    }

    if ( empty( $empleado ) ) {

        $msj .= "<li>No ha seleccionado el empleado</li>";

    }

    $statement = $conexion->prepare("update Usuarios set Id_empleado = ($empleado), Nombre = ('$user'),Clave =('$clave'), Nivel = ($estatus),img = ('$imagen')
    where Id_usuario = $idu");
    $statement->execute();

  }


}


if( isset( $_POST['EditarU'] ) ) {
  EditarU();
}

require_once('../vistas/modulos/usuarios.php')
?>
