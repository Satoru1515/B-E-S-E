
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Usuarios
        <small>Gestiona los Usuarios del sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="plantilla.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>

      </ol>
    </section>


      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">


            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">

              <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                <thead>
                  <tr>
                    <th style="width:10px">#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Foto</th>
                    <th>Nivel</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

                <tbody>
                  <?= ver(); ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--=====================================

          MODAL AGREGAR USUARIO

======================================-->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form  action="" method="post">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar usuario</h4>
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
              <input type="text" class="form-control input-lg" name="usuario" placeholder="Ingresar usuario" id="nuevoUsuario">
          </div>
          </div>
          <!-- ENTRADA PARA LA CONTRASEÑA -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control input-lg" name="password" placeholder="Ingresar contraseña">
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="estatus">
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
              <select class="form-control input-lg" name="empleado">
                <option value="">Selecionar Empleado</option>
                <?= listaEmplado(); ?>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->
           <div class="form-group" style="justify-content:center">
            <div class="panel">SUBIR FOTO</div>
            <input type="file" class="nuevaFoto" name="foto">
            <p class="help-block">__</p>

            <img src="img/user.png" class="img-thumbnail previsualizar" width="100px">
          </div>
        </div>
        <?php if( !empty($m) ) : ?>
        <div class="alert alert-warning">
          <?= $m ?>
        </div>
        <?php endif; ?>
      </div>


      <!--=====================================

      PIE DEL MODAL

      ======================================-->
   <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <input type="submit" class="btn btn-primary" name="btnGuardar" value="Guardar usuario">
  </div>

    </form>
  </div>

</div>
</div>







