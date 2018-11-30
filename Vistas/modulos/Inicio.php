<?php session_start();

$user =  $_SESSION['usuario'];

$userNivel = $user['nivel'];

$privilegios="";

if ($userNivel != 1) {
  $privilegios = "display:none;";
}

  include('../Controladores/inicio.php');

?>
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Tablero
        <small>Inicio</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12" style="<?= $privilegios ?>">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            <?php foreach($totalVentas as $totalV){  ?>
            <div class="info-box-content">
              <span class="info-box-text">Ventas</span>
              <span class="info-box-number"><?= $totalV['Total'] ?></span>
            </div>
          <?php } ?>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-uppercase">Facturas del mes actual</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Facturas: Mes </strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="myChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Metas alcansada</strong>
                  </p>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Facturas en tabla</span>
                    <?php foreach($totalVentas as $totalV){?>
                    <span class="progress-number"><b><?= $totalV['Total'] ?></b></span>
                    <?php } ?>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group" style="<?= $privilegios ?>">
                    <span class="progress-text">Total Vendido</span>
                    <?php foreach($totalDinero as $td){ ?>
                    <span class="progress-number"><b>$RD: <?= $td['Total']?></b></span>
                    <?php } ?>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">



          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ultimas facturas</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No. Factura</th>
                    <th>Cliente</th>
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Estatus</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($UltimasFacturas as $utmf){ ?>
                  <tr>
                    <td><a href="#">00000<?= $utmf['No_factura'] ?></a></td>
                    <td><?= $utmf['Cliente'] ?></td>
                    <td><?= $utmf['Empleado'] ?></td>
                    <td><?= $utmf['Fecha'] ?></td>
                    <td>
                      <?php
                        if($utmf['Status']==1){
                          echo <<<s
                            <span class="label label-success">Generada</span>
s;
                        }else {
                          echo <<<s
                            <span class="label label-warning">Pendiente</span>
s;
                        }
                      ?>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">

                      <button class="btn btn-primary btn-xs">Ver Factura</button>

                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Generar nueva Factura</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todas las Facturas</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Inventario</span>
              <?php foreach($totalP as $tp){?>
              <span class="info-box-number">Total <?= $tp['Total']?></span>
              <?php } ?>
              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                    Articulos registrados
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </div>
        </div>
    </section>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',

  // The data for our dataset
  data: {
      labels: [
        <?php foreach ($totalFacMes as $facMA) { ?>
                "<?php echo $facMA['Fecha'] ?>",
        <?php } ?>


      ],
      datasets: [{
          label: "Facturas generadas",
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [
            <?php foreach ($totalFacMes as $facMA) { ?>
                <?= $facMA['Cantidad'] ?>,
            <?php } ?>


          ],
      }]
  },

  // Configuration options go here
  options: {}
});
    </script>
