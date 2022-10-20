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
          <h1>Usuarios</h1>
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
              <h3 class="card-title">Mantenimiento de Usuarios</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#miModal" ><i class="fas fa-plus"></i> Agregar Usuario</button>
                </div>

               
                <div class="modal fade" id="miModal" tabindex="-1" arial-hidden="true" aria-labelledby="modalTitle" data-backdrop="static" >
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle" >Agregar Nuevo Usuario</h5>
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
                              <form action="{{route('usuarios.store')}}" method="post" class="tipousuario"> 
                                @csrf
                                <div class="row g-3">
                                  <div class="col">
                                    <label for="">Usuario</label> 
                                    <input type="text" name="cod_usuario" id="cod_usuario" class="form-control" placeholder="Ingrese el Usuario" aria-label="Primer Nombre">
                                  </div>
                                  <div class="col">
                                    <label for="">Password</label> 
                                    <input type="password" name="password" id="password" class="form-control" placeholder=" Ingrese la contraseña" aria-label="Segundo nombre">
                                  </div>
                                </div>

                                <div class="row g-3">
                                  <div class="col">
                                      <label for="">Nombre del Usuario</label>
                                      <input type="text" name="nombre_usuario" id="nombre_usuario" class = "form-control" placeholder="Ingrese Nombre del Usuario">
                                  </div>
                                  <div class="col">
                                      <label for="">Codigo de Empleado</label> 
                                      <input type="text" name="cod_empleado" id="cod_empleado" class="form-control" placeholder="Ingrese el Codigo de Empleado">
                                  </div>
                                </div>
                                
                                <div class="row g-3">
                                  <div class="col">
                                    <label for="">Estatus</label>
                                    <input type="number" name="cod_estatus" id="cod_estatus" class = "form-control" placeholder="Ingrese el Estatus del Usuario">
                                  </div>
                                  <div class="col">
                                    <label for="">Tipo de Usuario</label>
                                    <input type="number" name="cod_tipo_user" id="cod_tipo_user" class= "form-control" placeholder="Ingrese el Tipo de Usuario">
                                  </div>
                                </div>
                                
                                <div class="row g-3">
                                  <div class="col">
                                    <label for="">Fecha de Creación</label>
                                    <input type="text" name="fecha_crea_user" id="fecha_crea_user" class = "form-control"  placeholder = "Ingrese la fecha de Creacion del Usuario">
                                  </div>
                                
                                </div>
                                <br>

                                <div class="modal-footer">
                                  <div class="btnagregar">
                                    <input  type="submit" id="btn_agregar"  value="Agregar Usuario" class = "btn btn-success">
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
                    <th>Código Usuario</th>
                    <th>Contraseña</th>
                    <th>Nombre Usuario</th>
                    <th>Código Empleado</th>
                    <th>Estatus</th>
                    <th>Tipo de Usuario</th>
                    <th>Última Conexión</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1;@endphp
                  @foreach ($usuarios as $usuario)
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
                        <button  class="btn btn-outline-danger" onclick="EliminarPedido"><i class="fas fa-trash"></i></button>
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
