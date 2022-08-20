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
          <h1>Empleados</h1>
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
              <h3 class="card-title">Mantenimiento de Empleados</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#miModal" ><i class="fas fa-plus"></i> Agregar Empleado</button>
                </div>

               
                <div class="modal fade" id="miModal" tabindex="-1" arial-hidden="true" aria-labelledby="modalTitle" data-backdrop="static" >
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle" >Agregar Nuevo Empleado</h5>
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
                              <form action="{{route('empleados.store')}}" method="post" class="tipoempleado"> 
                                @csrf
                                <div class="row g-3">
                                    <div class="col">
                                      <label for="">Primer Nombre</label> 
                                      <input type="text" id="primer_nombre" class="form-control" placeholder="Ingrese el Primer Nombre del Empleado" aria-label="Primer Nombre">
                                    </div>
                                    <div class="col">
                                      <label for="">Segundo Nombre</label> 
                                      <input type="text" id="segundo_nombre" class="form-control" placeholder=" Ingrese el Segundo Nombre del Empleado" aria-label="Segundo nombre">
                                    </div>
                                  </div>
        
                                  <div class="row g-3">
                                    <div class="col">
                                        <label for="">Primer Apellido</label>
                                        <input type="text" id="primer_apellido_emple" class = "form-control" placeholder="Ingrese el Perimer Apellido del Empleado">
                                    </div>
                                    <div class="col">
                                        <label for="">Segundo Apellido</label> 
                                        <input type="text" id="segundo_apelido_emple" class="form-control" placeholder="Ingrese el Segundo Apelido del Empleado">
                                    </div>
                                  </div>
                                  <br>
                                  
                                  <div class="row g-3">
                                    <div class="col">
                                        <label for="">ID Empleado</label>
                                        <input type="text" id="ident_empleado" class = "form-control" placeholder="Ingrese el Numero de Identidad del Empleado">
                                    </div>
                                    <div class="col">
                                        <label for="">Telefono</label>
                                        <input type="text" id="telefono_emple" class= "form-control" placeholder="Ingrese el Telefono del Empleado">
                                    </div>
                                  </div>
                                  
                                  <div class="row g-3">
                                    <div class="col">
                                        <label for="">Email</label>
                                        <input type="text" id="email_emple" class = "form-control"  placeholder = "Ingrese el Correo Electronico del Empleado">
                                    </div>
                                    <div class="col">
                                        <label for="">Estado Civil</label>
                                        <input type="text" id="cod_estado_civil" class = "form-control"  placeholder = "Ingrese el Estado Civil del Empleado">
                                    </div>
                                  </div>
                                
                                  <label for="">Direccion</label>
                                  <input type="text" id="direccion_emple" class = "form-control"  placeholder = "Ingrese la Direccion del Empleado">
                                  <br>
                                    
                                  <div class="row g-3">
                                      <div class="col">
                                        <label for="">Estado</label>
                                        <input type="text" id="cod_estatus" class="form-control" placeholder="Ingrese el Estado del empleado">
                                      </div>
                                      <div class="col">
                                        <label for="">Fecha de Ingreso</label>
                                        <input type="date" id="fecha_ingreso_emple" class = "form-control"  >
                                      </div>
                                    </div>
                                  
                                    <div class="row g-3">
                                      <div class="col">
                                        <label for="">Cargo</label>
                                        <input type="text" id="cod_cargo_emple" class="form-control" placeholder="Ingrese el Cargo del Empleado">
                                      </div>
                                      <div class="col">
                                        <label for="">Tipo de Contrato</label>
                                        <input type="text" id="cod_tipo_contra" class="form-control" placeholder="Ingrese el Tipo de Contrato del Empleado">
                                      </div>
                                    </div>
                                <br>

                                <div class="modal-footer">
                                  <div class="btnagregar">
                                    <input type="submit" id="btn_agregar"  value="Agregar Empleado" class = "btn btn-success">
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
                    <th>Código Empleado</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Identidad</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Estado Civil</th>
                    <th>Estado</th>
                    <th>Fecha Ingreso</th>
                    <th>Cargo</th>                      
                    <th>Tipo Contrato</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1;@endphp
                  @foreach ($empleados as $empleado)
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
