<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Categorias
        <small>Categorias de los productos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="plantilla.php"><i class="fa fa-dashboard"></i> inicio</a></li>
        <li><a href="#">Productos</a></li>
       
      </ol>
    </section>

  
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Agregar Categoria</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              


  <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
<thead>
 <tr> 
   <th>Categorias</th>
   <th>Estatus</th>
   <th>Acciones</th>
 </tr> 
</thead>
<tbody>
                <?php foreach($dtCategoria as $cat){ ?>
                 <tr>             
                  <td class="text-uppercase"><?= $cat['Categoria']?></td>   
                  <td class="text-uppercase">
                  <?php
                  if($cat['StatusCategory']=='1'){
                    echo <<<str

                    <button class="btn btn-success btn-sm">Activado</button>
str;
                    }else{
                      echo <<<str

                    <button class="btn btn-danger btn-sm">Desactivado</button>
str;
                    }
                  ?>
                  
                  </td>                 
                    <td>
                    <div class="btn-group">
                <button class="btn btn-warning " data-toggle="modal" data-target="#modalEditarCategoria" ><i class="fa fa-pencil"></i></button>
                
                <form action="" method="post">
                <button class="btn btn-danger" type="submit" value="<?= $cat['ID_Categoria']?>" name="eliminar"><i class="fa fa-times"></i></button>
                </form>
                    </div>  
                  </td>                      
                </tr>
                <?php } ?>
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

MODAL AGREGAR CATEGORÍA

======================================-->
<div id="modalAgregarCategoria" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form method="post" action="">
      <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar categoría</h4>
      </div>
      <!--=====================================

      CUERPO DEL MODAL

      ======================================-->
      <div class="modal-body">
        <div class="box-body">
          <!-- ENTRADA PARA EL NOMBRE -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría">
            </div>
          </div>

          <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span> 
              <select class="form-control input-lg" name="nuevoEstatus">       
                <option value="">Selecionar Estatus</option>
                <option value="1">Activo</option>
                <option value="0">Desactivado</option>
              </select>
            </div>
          </div>
          <?php if(!empty($msj)) : ?>
            <div class="alert alert-danger">
              <?= $msj ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
     <!--=====================================

      PIE DEL MODAL

      ======================================-->

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <input type="submit" class="btn btn-primary pull-right" value="Guardar categoria" name="GuardarCategoria">

      </div>
    </form>
  </div>
</div>
</div>

<!--=====================================

MODAL EDITAR CATEGORÍA

======================================-->
<div id="modalEditarCategoria" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <form role="form" method="post" action="#">
     <!--=====================================

      CABEZA DEL MODAL

      ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar categoría</h4>
      </div>
      <!--=====================================

      CUERPO DEL MODAL

      ======================================-->
      <div class="modal-body">
        <div class="box-body">
          <!-- ENTRADA PARA EL NOMBRE -->
          
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="hidden" value="">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" name="editarCategoria" placeholder="Categoría">
            </div>
          </div>

          <div class="form-group">   
            <div class="input-group">       
              <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span> 
              <select class="form-control input-lg" name="editarEstatus">       
                <option value="">Estatus</option>
                <option value="1">Activo</option>
                <option value="0">Desactivado</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--=====================================

      PIE DEL MODAL

      ======================================-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
    </form>
  </div>
</div>
</div>


