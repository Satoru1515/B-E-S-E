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
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">Agregar Producto</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              


<table class="table table-bordered table-striped dt-responsive tablas" width="100%">

         

<thead>

 

 <tr>

   

 <th style="width:10px">#</th>

 <th style="width:10px">ID</th>

<th>Nombre</th>

<th>Imagen</th>

<th>Categoria</th>

<th>Stock</th>

<th>Costo</th>

<th>Precio</th>

<th>Estatus</th>

<th>Registro(Fecha)</th>

<th>Descripcion</th>

<th>Acciones</th>



 </tr> 



</thead>



<tbody>

<tr>
                  <td>175</td>
                  <td>9289283</td>
                  <td>Comedor</td>
                  <td><img src="https://home.ripley.cl/store/Attachment/WOP/D359/2000361444671/2000361444671_2.jpg" width="40px" alt=""></td>
                  <td>Hogar</td>
                  <td><button class="btn btn-success btn-sm">15</button></td>
                  <td>3000$</td>
                  <td>14500$</td>
                  <td><button class="btn btn-success btn-sm">Activo</button></td>
                  <td>10-12-2015</td>
                  <td>Comedor de Caoba, de 4 sillas con cristal incluido.</td>
                  
                  <td>


                    <div class="btn-group">
                    <button class="btn btn-success btn-sm" ><i class="fa fa-eye"></i></button>
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditarProducto"><i class="fa fa-pencil"></i></button>
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

          MODAL AGREGAR Producto

======================================-->
<div id="modalAgregarProducto" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Producto</h4>
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
          <!-- ENTRADA PARA CODIGO PRODUCTO -->

           <div class="form-group">       
            <div class="input-group">    
              <span class="input-group-addon"><i class="fa fa-key"></i></span> 
              <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="531" id="nuevoCodigo" readonly>
          </div>
          </div>
          <!-- ENTRADA PARA LA STOCK -->
           <div class="form-group">        
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
              <input type="number" class="form-control input-lg" name="nuevoStock" placeholder="Ingresar Stock" required>
            </div>
          </div>
           <!-- ENTRADA PARA EL COSTO -->
           <div class="form-group">        
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span> 
              <input type="number" class="form-control input-lg" name="nuevoCosto" placeholder="Ingresar Costo" required>
            </div>
          </div>
           <!-- ENTRADA PARA EL PRECIO -->
           <div class="form-group">        
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span> 
              <input type="number" class="form-control input-lg" name="nuevoPrecio" placeholder="Ingresar Precio" required>
            </div>
          </div>
           <!-- ENTRADA PARA SELECCIONAR CATEGORIA -->
           <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-th"></i></span> 
              <select class="form-control input-lg" name="nuevaCategoria">       
                <option value="">Selecionar CATEGORIA</option>

              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR ESTATUS -->
          <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span> 
              <select class="form-control input-lg" name="nuevoPerfil">       
                <option value="">Selecionar Estatus</option>
                <option value="1">Activo</option>
                <option value="0">Desactivado</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA LA DESCRIPCION -->

          <div class="form-group">
  <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span> 
      <textarea type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar Descripcion" required></textarea>
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

        <button type="submit" class="btn btn-primary">Guardar Producto</button>
  </div>

    </form>
  </div>

</div>
</div>







<!--=====================================

          MODAL Editar Producto

======================================-->
<div id="modalEditarProducto" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" enctype="multipart/form-data">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Producto</h4>
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
          <!-- ENTRADA PARA CODIGO PRODUCTO -->

           <div class="form-group">       
            <div class="input-group">    
              <span class="input-group-addon"><i class="fa fa-key"></i></span> 
              <input type="text" class="form-control input-lg" name="editarCodigo" placeholder="531" id="editarCodigo" readonly>
          </div>
          </div>
          <!-- ENTRADA PARA LA STOCK -->
           <div class="form-group">        
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
              <input type="number" class="form-control input-lg" name="editarStock" placeholder="Editar Stock" required>
            </div>
          </div>
           <!-- ENTRADA PARA EL COSTO -->
           <div class="form-group">        
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span> 
              <input type="number" class="form-control input-lg" name="editarCosto" placeholder="Editar Costo" required>
            </div>
          </div>
           <!-- ENTRADA PARA EL PRECIO -->
           <div class="form-group">        
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span> 
              <input type="number" class="form-control input-lg" name="editarPrecio" placeholder="Editar Precio" required>
            </div>
          </div>
           <!-- ENTRADA PARA SELECCIONAR CATEGORIA -->
           <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-th"></i></span> 
              <select class="form-control input-lg" name="editarCategoria">       
                <option value="">Selecionar CATEGORIA</option>

              </select>
            </div>
          </div>
          <!-- ENTRADA PARA SELECCIONAR ESTATUS -->
          <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span> 
              <select class="form-control input-lg" name="editarPerfil">       
                <option value="">Selecionar Estatus</option>
                <option value="1">Activo</option>
                <option value="0">Desactivado</option>
              </select>
            </div>
          </div>
          <!-- ENTRADA PARA LA DESCRIPCION -->

          <div class="form-group">
  <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span> 
      <textarea type="text" class="form-control input-lg" name="editarDescripcion" placeholder="Editar Descripcion" required></textarea>
</div>
</div>
          <!-- ENTRADA PARA SUBIR FOTO -->
           <div class="form-group" style="justify-content:center">   
            <div class="panel">SUBIR FOTO</div>
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

        <button type="submit" class="btn btn-primary">Editar Producto</button>
  </div>

    </form>
  </div>

</div>
</div>





