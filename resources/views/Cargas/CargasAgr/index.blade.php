@extends('adminlte::page')

@section('title', 'Transportes Barahona Morazán')

@section('content_header')
    
@stop

@section('content')

<div class="wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Servicios</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- EMPLEADOS -->
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Cargas a enviar</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#miModal" ><i class="fas fa-plus"></i> Agregar Carga</button>
                </div>

               
                <div class="modal fade" id="miModal" tabindex="-1" arial-hidden="true" aria-labelledby="modalTitle" data-backdrop="static" >
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle" >Agregar Nuevas Cargas</h5>
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                      </div>
                      <div class="modal-body">                        

                        <div class="formulario">
                          <div class="row">
                            <div class="col-12">
                              <h3></h3>
                              <hr>
                            </div>
                            <div class="col-12">
                              <form action="{{route('agcargas.store')}}" method="post" class="tipoagcargas"> 
                                @csrf
                                <div class="row g-3">
                                  <div class="col">
                                    <label for="">Cantidad</label>
                                    <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Ingrese la cantidad exacta de la carga">
                                  </div>
                                  <div class="col">
                                    <label for="">Peso (Kg)</label>
                                    <input type="text" name="peso_carga_agreg" id="peso_carga_agreg" class="form-control" placeholder="Ingrese el peso en Kilos">
                                  </div>
                                </div>                  
                                <div class="row g-3">                      
                                  <div class="col">
                                    <label for="">Descripción</label>
                                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese la descripción de la carga">
                                  </div>                      
                                  <div class="col">
                                    <label for="">Fecha de Ingreso</label>
                                    <input type="date" name="fecha_carga_enviar" id="fecha_carga_enviar" class = "form-control"  >
                                  </div>
                                </div>
                                <br> 
                                
                                <div class="modal-footer">
                                  <div class="btnagregar">
                                    <input type="submit" id="btn_agregar"  value="Agregar Carga" class = "btn btn-success">
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Código Carga</th>
                    <th>Cantidad</th>
                    <th>Peso (Kg)</th>
                    <th>Descripción</th>
                    <th>Fecha de Envío</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1;@endphp
                  @foreach ($agcargas as $agcarga)
                  <tr>
                      <td>{{$i}}</td>
                      <td>{{$agcarga['Kg_Carga_Enviar']}}</td>
                      <td>{{$agcarga['des_Carga_Enviar']}}</td>
                      <td>{{$agcarga['can_Carga_Enviar']}}</td>
                      <td>{{$agcarga['cod_Carga_Futura']}}</td>
                      <!--<td>{{$agcarga['cenv_usr_adicion']}}</td>-->
                      <!--<td>{{$agcarga['cenv_usr_modifico']}}</td>-->

                      <td>
                        <button class="btn btn-outline-dark" onclick="CargarPedido('+MiItems[i].ID+')"><ii class="fas fa-edit"></ii></button>
                        <button class="btn btn-outline-danger" onclick="EliminarPedido('+MiItems[i].ID+')"><ii class="fas fa-trash"></ii></button>
                      </td>
                    </tr>
                    @php $i++;@endphp
                  @endforeach                  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <hr>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
@stop

@section('footer')
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2022-2023 <a href="#">Empresa de Transportes Barahona Morazán</a>.</strong> All rights reserved.
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
