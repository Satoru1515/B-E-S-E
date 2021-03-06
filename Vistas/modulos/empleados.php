<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Empleados
        <small>Gestiona los Empleados del sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="plantilla.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Tables</a></li>

      </ol>
    </section>


      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">


            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEmpleados">Agregar Empleados</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">



              <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                <thead>
                  <tr>
                    <th style="width:10px">#</th>
                    <th>Cedula</th>
                    <th>Nombre(s)</th>
                    <th>Apellido(s)</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Ingreso(Fecha)</th>
                    <th>Cargo</th>
                    <th>Estado civil</th>
                    <th>Grado formacion</th>
                    <th>Ocupacion</th>
                    <th>Genero</th>
                    <th>Estatus</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>

                  <?=  listarEmpleados(); ?>

              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->

<!--=====================================

          MODAL AGREGAR Empleado

======================================-->
<div id="modalAgregarEmpleados" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Empleado</h4>
      </div>
      <!--=====================================

      CUERPO DEL MODAL

      ======================================-->
      <div class="modal-body">
        <div class="box-body">
          <!-- ENTRADA PARA EL NOMBRE -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

            </div>
          </div>
          <!-- ENTRADA PARA EL Apellido -->

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoApellido" placeholder="Ingresar Apellido" id="nuevoApellido" required>
          </div>
          </div>
          <!-- ENTRADA PARA la cedula -->

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaCedula" placeholder="Ingresar Cedula" id="nuevaCedula" required>
          </div>
          </div>
          <!-- ENTRADA PARA EL CARGO -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoCargo" placeholder="Ingresar Cargo" required>
            </div>
          </div>
            <!-- ENTRADA PARA EL Nacionalidad -->
            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaNacionalidad" placeholder="Ingresar Nacionalidad" required>
            </div>
          </div>
           <!-- ENTRADA PARA EL Nacimiento -->
           <div class="form-group">
            <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i> Fecha de Nacimiento</span>
              <input type="date" class="form-control input-lg" name="nuevaNacimiento" placeholder="Ingresar fecha de Nacimiento" required>
            </div>
          </div>
           <!-- ENTRADA PARA SELECCIONAR SU Formacion -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
              <select class="form-control input-lg" name="nuevaFormacion">
                <option value="">Selecionar Grado de Formacion</option>
                <option value="Bachiller">Bachiller</option>
                <option value="Profesional">Profesional</option>
                <option value="Doctor">Doctor</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR SU Ocupacion -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
              <select class="form-control input-lg" name="nuevaOcupacion">
                <option value="">Selecionar Ocupacion</option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR GENERO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-mars-double"></i></span>
              <select class="form-control input-lg" name="nuevoGenero">
                <option value="">Selecionar Genero</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
          </div>
            <!-- ENTRADA PARA SELECCIONAR ESTADO CIVIL -->
            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="nuevoEstado">
                <option value="">Selecionar Estado Civil</option>
                <option value="Soltero">Soltero</option>
                <option value="Casado">Casado</option>
                <option value="Comprometido">Comprometido</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->
           <div class="form-group" style="justify-content:center">
            <div class="panel">SUBIR FOTO</div>
            <input type="file" class="nuevaFoto" name="nuevaFoto">
            <p class="help-block">Peso máximo de la foto 2MB</p>

            <img src="img/user.png" class="img-thumbnail previsualizar" width="100px">
          </div>
        </div>
      </div>

      <!--=====================================

      PIE DEL MODAL

      ======================================-->
   <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar Empleado</button>
  </div>

    </form>
  </div>

</div>
</div>










<!--=====================================

          MODAL EDITAR EMPLEADO

======================================-->
<div id="modalEditarEmpleados" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Empleado</h4>
      </div>
      <!--=====================================

      CUERPO DEL MODAL

      ======================================-->
      <div class="modal-body">
        <div class="box-body">
          <!-- ENTRADA PARA EL NOMBRE -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="editarNombre" placeholder="Editar nombre" required>

            </div>
          </div>
          <!-- ENTRADA PARA EL Apellido -->

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="editarApellido" placeholder="Editar Apellido" id="editarApellido" required>
          </div>
          </div>
          <!-- ENTRADA PARA la cedula -->

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
              <input type="text" class="form-control input-lg" name="editarCedula" placeholder="Editar Cedula" id="editarCedula" required>
          </div>
          </div>
          <!-- ENTRADA PARA EL CARGO -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
              <input type="text" class="form-control input-lg" name="editarCargo" placeholder="Editar Cargo" required>
            </div>
          </div>
            <!-- ENTRADA PARA EL Nacionalidad -->
            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
              <input type="text" class="form-control input-lg" name="editarNacionalidad" placeholder="Editar Nacionalidad" required>
            </div>
          </div>
           <!-- ENTRADA PARA EL Nacimiento -->
           <div class="form-group">
            <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i> Fecha de Nacimiento</span>
              <input type="date" class="form-control input-lg" name="editarNacimiento" placeholder="Editar fecha de Nacimiento" required>
            </div>
          </div>
           <!-- ENTRADA PARA SELECCIONAR SU Formacion -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
              <select class="form-control input-lg" name="editarFormacion">
                <option value="">Selecionar Grado de Formacion</option>
                <option value="Bachiller">Bachiller</option>
                <option value="Profesional">Profesional</option>
                <option value="Doctor">Doctor</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR SU Ocupacion -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
              <select class="form-control input-lg" name="editarOcupacion">
                <option value="">Selecionar Ocupacion</option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR GENERO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-mars-double"></i></span>
              <select class="form-control input-lg" name="editarGenero">
                <option value="">Selecionar Genero</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
          </div>
            <!-- ENTRADA PARA SELECCIONAR ESTADO CIVIL -->
            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="editarEstado">
                <option value="">Selecionar Estado Civil</option>
                <option value="Soltero">Soltero</option>
                <option value="Casado">Casado</option>
                <option value="Comprometido">Comprometido</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->
           <div class="form-group" style="justify-content:center">
            <div class="panel">EDITAR FOTO</div>
            <input type="file" class="nuevaFoto" name="editarFoto">
            <p class="help-block">Peso máximo de la foto 2MB</p>

            <img src="img/user.png" class="img-thumbnail previsualizar" width="100px">
          </div>
        </div>
      </div>

      <!--=====================================

      PIE DEL MODAL

      ======================================-->
   <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  </div>

    </form>
  </div>

</div>
</div>
