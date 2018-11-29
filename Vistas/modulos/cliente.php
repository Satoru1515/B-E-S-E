<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Clientes
        <small>Gestiona los Clientes del sistema</small>
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
              

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarClientes">Agregar Clientes</button> 
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              


<table class="table table-bordered table-striped dt-responsive tablas" width="100%">

         

<thead>

 

 <tr>

   

   <th style="width:10px">#</th>

   <th>Nombre(s)</th>

   <th>Apellido(s)</th>

   <th>Foto</th>

     <th>Estatus</th>

   <th>Ingreso(Fecha)</th>

  <th>Acciones</th>

 </tr> 



</thead>



<tbody>

<tr>
                  <td>125</td>
                  <td>Mike Doe</td>
                  <td>George</td>
                  <td><img src="http://www.csriveraine.qc.ca/wp-content/uploads/2016/01/nopic.jpg" width="40px" alt=""></td>
                  <td><button class="btn btn-success btn-xs ">Activado</button></td>
                  <td>10-12-2015</td>
                  <td>


                    <div class="btn-group">
                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalMostrarClientes" ><i class="fa fa-eye"></i></button>
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditarClientes" ><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></button>
                
                    </div>  

                  </td>
                  
</tr>

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

          MODAL AGREGAR Clientes

======================================-->
<div id="modalAgregarClientes" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Clientes</h4>
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

        <button type="submit" class="btn btn-primary">Guardar Clientes</button>
  </div>

    </form>
  </div>

</div>
</div>









       
<!--=====================================

          MODAL EDITAR Clientes

======================================-->
<div id="modalEditarClientes" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Clientes</h4>
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





