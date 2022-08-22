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
          <h1>Planillas</h1>
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
              <h3 class="card-title">Listado de Planilla</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#miModal" ><i class="fas fa-plus"></i> Agregar Planilla</button>
                </div>

               
                <div class="modal fade" id="miModal" tabindex="-1" arial-hidden="true" aria-labelledby="modalTitle" data-backdrop="static" >
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle" >Agregar Nueva Planilla</h5>
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
                              <form action="{{route('planillas.store')}}" method="post" class="tipoplanillas"> 
                                @csrf
                                <div class="row g-3">
                                    <div class="col-6">
                                      <label for="">Nombre del empleado</label> 
                                      <input type="text" id="primer_nombre" class="form-control" placeholder="Ingrese el Primer Nombre del Empleado" aria-label="Primer Nombre">
                                    </div>
                                  </div>
                                  <div class="row g-3">
                                    <div class="col">
                                      <label for="inputStatus">Área</label>
                                      <select id="inputStatus" class="form-control custom-select">
                                        <option selected disabled>Selecciona el área...</option>
                                        <option>Área 1</option>
                                        <option>Área 2</option>
                                      </select>
                                    </div>

                                    <div class="col">
                                      <label for="inputStatus">Puesto</label>
                                      <select id="inputStatus" class="form-control custom-select">
                                        <option selected disabled>Selecciona el puesto de trabajo...</option>
                                        <option>Puesto 1</option>
                                        <option>Puesto 2</option>
                                      </select>
                                    </div>
                                  </div>
                                  
                                  <br>
                                  <div class="row g-3">
                                    <div class="col">
                                      <label for="inputStatus">Tipo de Salario</label>
                                      <select id="inputStatus" class="form-control custom-select">
                                        <option selected disabled>Selecciona el tipo de salario...</option>
                                        <option>Salario Fijo</option>
                                        <option>Salario Variable</option>
                                      </select>
                                    </div>
                                    <div class="col">
                                      <label for="">Distancia</label>
                                      <input type="text" id="telefono_emple" class= "form-control" placeholder="Ingrese la distancia recorrida en Kilometros (KM).">
                                    </div>
                                  </div>                    
                                  <div class="row g-3">
                                    <div class="col">
                                      <label for="">Cantidad de Viajes</label>
                                      <input type="text" id="email_emple" class = "form-control"  placeholder = "Ingrese la Cantidad de viajes.">
                                    </div>
                                    <div class="col">
                                      <label for="">Salario Total (Lps)</label>
                                      <input type="text" id="cod_estado_civil" class = "form-control"  placeholder = "Total de salario">
                                    </div>
                                  </div>
                                  <br>              
                                  <hr>
                                  <div class="row g-3">
                                    <div class="col">
                                      <div class="btnagregar"></div>
                                      <input type="submit" id="btn_agregar"  value="Calcular Salario" class = "btn btn-success">
                                    </div>
                                    <br>
                                    <div class="col">
                                      <div class="btneditar"></div>
                                      <input type="submit"  value="   Editar   " class="btn btn-success">
                                    </div>
                                    <div class="col">
                                      <div class="btneliminar"></div>
                                      <input type="submit"  value="Eliminar" class="btn btn-success">
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
                    <th>Id Empleado</th>
                    <th>Nombre Empleado</th>
                    <th>Área</th>
                    <th>Puesto</th>
                    <th>Tipo de Salario</th>
                    <th>Distancia (Km)</th>
                    <th>Cantidad de Viajes</th>
                    <th>Salario Total (Lps)</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                  @php $i=1;@endphp
                  @foreach ($planilla as $planilla)
                  <tr>
                      <td>{{$i}}</td>
                      <td>{{$usuario['usr_password']}}</td>
                      <td>{{$usuario['usr_nom_usuario']}}</td>
                      <td>{{$usuario['usr_cod_empleado']}}</td>
                      <td>{{$usuario['usr_cod_estatus']}}</td>
                      <td>{{$usuario['usr_cod_tipo_usuario']}}</td>
                      <td>{{$usuario['usr_fec_ult_conex']}}</td>
                      
                      <td>
                        <button class="btn btn-outline-dark" onclick="CargarPedido('+MiItems[i].ID+')"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-outline-danger" onclick="EliminarPedido('+MiItems[i].ID+')"><i class="fas fa-trash"></i></button>
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
