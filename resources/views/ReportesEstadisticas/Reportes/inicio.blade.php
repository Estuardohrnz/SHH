@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
      

        <style></style>
      <div class="container-fluid">
        <div class="row mb-10">
          <div class="container-fluid">
            <br>
            <h1 id="1" align="center">
              <FONT FACE="times new roman">Generar Reportes&nbsp;</font>
            </h1>


          </div><!-- /.col -->
          <div class="col-40 align-content-center" align="left">

            <div class="container col-40">
              <div class="row ">
                <div class="col-40">
                  <div class="card text-left">
                    <div class="card-header">
                      <h3>
                        <FONT FACE="times new roman">Reportes</font>
                      </h3>
                    </div>
                    <div class="card-body">
                      <span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
                        Generar Reporte <span class="fa fa-plus-circle"></span>
                      </span>
                      <hr>

                      <div >
  



    </form>


    
</div>
                      <!--llamado de la tabla -->
                      <div id="tablaDatatable"></div>
                    </div>
                    <div class="card-footer text-muted">
                      Proyecto Sistema Hospitalario
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
</head>


<!-- Modal -->
<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reportes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmnuevo">
          <div class="form-group row">
            <div class="col-sm-6">
              <p>Tipo de reporte</p>
              <select name="tipo_reporte" id="" value="" class="form-control">
                
                <option>Reporte Anual de Usuarios</option>
                <option>Reporte Diario de Pacientes</option>
                <option>Reporte Semanal de Pacientes</option>
                <option>Reporte Mensual de Pacientes</option>
                <option>Reporte Mensual de Proveedores</option>
                <option>Reporte Anual de Proveedores</option>
                <option>Reporte Diario de Expedientes Medicos</option>
                <option>Reporte Mensual de Expedientes Medicos</option>
                <option>Reporte Diario de Citas</option>
                <option>Reporte Mensual Citas</option>
                <option>Reporte de Ventas</option>
                <option>Reporte Diario de Ventas Productos</option>
                <option>Reporte Mensual de Ventas de Servicios</option>
                <option>Reporte de Compras Diarias</option>
                <option>Reporte de Compras Mensuales</option>
                <option>Reporte Mensual de Inventario</option>
                <option>Reporte Anual de Inventario</option>
                <option>Reporte Diario de Notas de Audio</option>
                <option>Reporte Mensual de Notas de Audio</option>
                <option>Reporte de Informacion de la Empresa</option>
                <option>Reporte Diario de Notas de Audio</option>
                <option>Reporte de Graficos</option>
              </select>
            </div>

            <div class="col-sm-6">
              <p>Tipo de Formato</p>
              <select name="tipo_reporte" id="" value="" class="form-control">
                <option>PDF</option>
                <option>HTML</option>
                <option>XLS</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <p class="col-md-1">Período</p>
            <div class="col-sm-4">
              <select name="tipo_reporte" id="" value="" class="form-control">
                <option>Hoy</option>
                <option>Ayer</option>
                <option>Hace 2 dias</option>
                <option>Hace 3 dias</option>
                <option>Esta Semana</option>
                <option>Semana Pasada</option>
                <option>Este Mes</option>
                <option>Mes Pasado</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <p class="col-md-1">De:</p>
            <div class="col-sm-4">
              <input type="date">
            </div>
          </div>

          <div class="form-group row">
            <p class="col-md-1">Hasta:</p>
            <div class="col-sm-4">
              <input type="date">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-8">
              <p>Enviar al correo</p>
              
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-3">
              <p>Diariamente</p>
              <input type="checkbox">
            </div>

            <div class="col-sm-3">
              <p>Semanalmente</p>
              <input type="checkbox">
            </div>

            <div class="col-sm-3">
              <p>Mensualmente</p>
              <input type="checkbox">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-3">
              <input value="00:00" readonly type="text">
            </div>
            <div class="col-sm-3">
              <input value="00:00" readonly type="text">
            </div>
            <div class="col-sm-3">
              <input value="00:00" readonly type="text">
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" id="btnAgregarnuevo" class="btn btn-primary">Generar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nuevo</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

</div>


<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#registros").DataTable({
                "language": {
                    "sSearch": "Buscar:",
                    "sEmptyTable": "No hay datos disponibles",
                    "sZeroRecords": "No se han encontrado resultados",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
                    "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
                    "sInfoFiltered": "(filtrando de un total de _MAX_ registrados)",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",

                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },

                    "sLoadingRecords": "Cargando...",
                    "sLengthMenu": "Mostrar _MENU_ registros"
                },
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@stop