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

   <th>Perfil</th>

   <th>Estado</th>

   <th>Último login</th>

   <th>Acciones</th>



 </tr> 



</thead>



<tbody>

<tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>user1</td>
                  <td><img src="http://www.csriveraine.qc.ca/wp-content/uploads/2016/01/nopic.jpg" width="40px" alt=""></td>
                  <td>admin</td>
                  <td><button class="btn btn-success btn-xs ">Activado</button></td>
                  <td>10-12-2015</td>
                  <td>


                    <div class="btn-group">
                <button class="btn btn-warning " data-toggle="modal" data-target="#modalEditarUsuario" ><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger " ><i class="fa fa-times"></i></button>
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

          MODAL AGREGAR USUARIO

======================================-->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
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
          <!-- ENTRADA PARA EL NOMBRE -->         
          <div class="form-group">    
            <div class="input-group">    
              <span class="input-group-addon"><i class="fa fa-user"></i></span> 
              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

            </div>
          </div>
          <!-- ENTRADA PARA EL USUARIO -->

           <div class="form-group">       
            <div class="input-group">    
              <span class="input-group-addon"><i class="fa fa-key"></i></span> 
              <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>
          </div>
          </div>
          <!-- ENTRADA PARA LA CONTRASEÑA -->
           <div class="form-group">        
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span> 
              <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->
          <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-users"></i></span> 
              <select class="form-control input-lg" name="nuevoPerfil">       
                <option value="">Selecionar perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR SEMPLEADO -->
          <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-users"></i></span> 
              <select class="form-control input-lg" name="nuevoPerfil">       
                <option value="">Selecionar Empleado</option>
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

        <button type="submit" class="btn btn-primary">Guardar usuario</button>
  </div>

    </form>
  </div>

</div>
</div>









<!--=====================================

MODAL EDITAR USUARIO

======================================-->
<div id="modalEditarUsuario" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
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
          <!-- ENTRADA PARA EL NOMBRE -->      
          <div class="form-group">      
            <div class="input-group">      
            <span class="input-group-addon"><i class="fa fa-user"></i></span> 
              <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>
            </div>
          </div>
          <!-- ENTRADA PARA EL USUARIO -->
           <div class="form-group">       
            <div class="input-group">    
             <span class="input-group-addon"><i class="fa fa-key"></i></span> 
              <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>
            </div>
          </div>
          <!-- ENTRADA PARA LA CONTRASEÑA -->
         <div class="form-group">       
            <div class="input-group">      
              <span class="input-group-addon"><i class="fa fa-lock"></i></span> 
              <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">
              <input type="hidden" id="passwordActual" name="passwordActual">
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->
          <div class="form-group">       
            <div class="input-group">     
              <span class="input-group-addon"><i class="fa fa-users"></i></span> 
              <select class="form-control input-lg" name="editarPerfil">         
                <option value="" id="editarPerfil"></option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
           <!-- ENTRADA PARA SELECCIONAR SEMPLEADO -->
           <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-users"></i></span> 
              <select class="form-control input-lg" name="nuevoPerfil">       
                <option value="">Selecionar Empleado</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->
           <div class="form-group">     
            <div class="panel">SUBIR FOTO</div>
            <input type="file" class="nuevaFoto" name="editarFoto">
     <p class="help-block">Peso máximo de la foto 2MB</p>
            <img src="img/user.png" class="img-thumbnail previsualizar" width="100px">
            <input type="hidden" name="fotoActual" id="fotoActual">
          </div>
        </div>
      </div>
      <!--=====================================

      PIE DEL MODAL

      ======================================-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Modificar usuario</button>
      </div>
    </form>
  </div>
</div>
</div>






 