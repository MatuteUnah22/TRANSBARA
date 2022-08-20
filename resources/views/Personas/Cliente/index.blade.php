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
          <h1>Clientes</h1>
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
              <h3 class="card-title">Mantenimiento de Clientes</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#miModal" ><i class="fas fa-plus"></i> Agregar Cliente</button>
                </div>
               
                <div class="modal fade" id="miModal" tabindex="-1" arial-hidden="true" aria-labelledby="modalTitle" data-backdrop="static" >
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle" >Agregar Nuevo Cliente</h5>
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
                              <form action="{{route('clientes.store')}}" method="post" class="tipocliente"> 
                                @csrf
                                <div class="row g-3">
                                    <div class="col">
                                      <label for="">Nombre Cliente</label> 
                                      <input type="text" id="nombre_cliente" class="form-control" placeholder="Ingrese el Nombre del cliente" aria-label="Nombre ">
                                    </div>
                                    <div class="col">
                                      <label for="">Tiene RTN</label> 
                                      <br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Si</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                      </div>
                                    </div>
                                  </div>
        
                                  <div class="row g-3">
                                    <div class="col">
                                      <label for="">ID Cliente</label>
                                      <input type="text" id="num_ident_ciente" class = "form-control" placeholder="Ingrese el numero de ID del Cliente">
                                    </div>
                                    <div class="col">
                                      <label for="">Tipo de Persona</label> 
                                      <input type="text" id="cod_tipo_perso" class="form-control" placeholder="Ingrese el tipo de Persona">
                                    </div>
                                  </div>
                                  
                                  <div class="row g-3">
                                    <div class="col">
                                      <label for="">Estatus</label>
                                      <input type="text" id="cod_estatus" class = "form-control" placeholder="Ingrese el Estatus del Cliente">
                                    </div>
                                    <div class="col">
                                      <label for="">telefono</label>
                                      <input type="text" id="telefono_cliente" class= "form-control" placeholder="Ingrese el Telefono del Cliente">
                                    </div>
                                  </div>
                                  
                                  <div class="row g-3">
                                    <div class="col">
                                      <label for="">Email</label>
                                      <input type="text" id="email_cliente" class = "form-control"  placeholder = "Ingrese el correo electronico del cliente">
                                    </div>
                                    <div class="col">
                                      <label for="">Pais de Origen</label>
                                      <input type="text" id="cod_pais" class= "form-control" placeholder="Ingrese el Pais de Origen del Cliente">
                                  </div>
                                  </div>
        
                                  <label for="">Dirección</label>
                                  <input type="text" id="direccion_emple" class = "form-control"  placeholder = "Ingrese la Direccion del Empleado">
                                  <br>
                                
                                  <div class="modal-footer">
                                    <div class="btnagregar">
                                      <input type="submit" id="btn_agregar"  value="Agregar Cliente" class = "btn btn-success">
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
                  @foreach ($clientes as $cliente)
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
