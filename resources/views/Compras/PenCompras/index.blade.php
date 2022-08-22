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
          <h1>Compras Pendientes por Pagar</h1>
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
              <h3 class="card-title">Lista de Compras por Pagar</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#miModal" ><i class="fas fa-plus"></i> Registrar Compra</button>
                </div>

               
                <div class="modal fade" id="miModal" tabindex="-1" arial-hidden="true" aria-labelledby="modalTitle" data-backdrop="static" >
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle" >Registrar Compras Pendientes por Pagar</h5>
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
                              <form action="{{route('copendientes.store')}}" method="post" class="copendientes"> 
                                @csrf
                                <form class="compras">
                                    <div class="row g-3">
                                      <div class="col">
                                        <label for="">Fecha de Compra</label>
                                        <input type="date" id="fecha_ingreso_emple" class = "form-control">
                                      </div>
                                      <div class="col">
                                        <label for="">Nombre de la Empresa</label> 
                                        <input type="text" id="primer_nombre" class="form-control" placeholder="Ingrese el nombre de la Empresa." aria-label="Primer Nombre">
                                      </div>
                                    </div>
                                    <div class="row g-3">
                                      <div class="col">
                                        <label for="">Artículo</label> 
                                        <input type="text" id="segundo_nombre" class="form-control" placeholder="Ingrese el Artículo." aria-label="Segundo nombre">
                                      </div>
                                      <div class="col">
                                        <label for="">Cantidad</label> 
                                        <input type="text" id="segundo_apelido_emple" class="form-control" placeholder="Ingrese la Cantidad.">
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row g-3">
                                      <div class="col">
                                        <label for="">Código de Pago</label>
                                        <input type="text" id="ident_empleado" class = "form-control" placeholder="Ingrese el Código de Pago.">
                                      </div>
                                      <div class="col">
                                        <label for="">Pago Restante</label>
                                        <input type="text" id="telefono_emple" class= "form-control" placeholder="Ingrese el total de Pago Restante.">
                                      </div>
                                    </div>
                                    <br> 
                                    <div class="btnagregar">
                                      <input type="submit" id="btn_agregar" onclick="Agregarfactura()" value="Compra a Pagar" class="btn btn-success">
                                    </div>
                                    <hr>
                                  </form>
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
                        <th>Fecha</th>
                        <th>Nombre de la Empresa</th>
                        <th>Artículo</th>
                        <th>Cantidad</th>
                        <th>Codigo de pago</th>
                        <th>Pago restante</th>
                        <th>Acciones</th>
                      </tr>
                </thead>
                <tbody>
                  @php $i=1;@endphp
                  @foreach ($copendientes as $copendiente)
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

