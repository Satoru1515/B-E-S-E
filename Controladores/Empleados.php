<?php

function listarEmpleados(){

  include('../config/db.php');

  $statement = $conexion->prepare("select * from Empleados");
  $statement->execute();
  $empleados = $statement->fetchAll();

  foreach ($empleados as $empleado) {

      $estado="btn-success";

      if($empleado['Status'] != "activo"){
          $estado="btn-danger";
      }

      echo <<<s
      <tr>
        <td>00CODEMP{$empleado['Id_empleado']}</td>
        <td>{$empleado['Cedula']}</td>
        <td>{$empleado['Nombres']}</td>
        <td>{$empleado['Apellidos']}</td>
        <td>{$empleado['Fecha_nac']}</td>
        <td>{$empleado['Fecha_registro']}</td>
        <td>{$empleado['Cargo']}</td>
        <td>{$empleado['Estado_civil']}</td>
        <td>{$empleado['Grado_formacion']}</td>
        <td>{$empleado['Ocupacion']}</td>
        <td>{$empleado['Genero']}</td>
        <td><button class="btn <?= $estado ?> btn-xs ">{$empleado['Status']}</button></td>
        <td>
          <div class="btn-group">
            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditarEmpleados" ><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></button>
          </div>
        </td>
    </tr>
s;
  }

}


require_once('../vistas/modulos/empleados.php');
?>
