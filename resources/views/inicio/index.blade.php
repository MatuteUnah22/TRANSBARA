@extends('adminlte::page')

@section('title', 'Transportes Barahona Morazán')

@section('content_header')
    
@stop

@section('content')
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid  col-lg-5">
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

            <!-- Map card -->
            <div class="card mb-3 bg-gradient-primary ">
                <img src="../public/vendor/adminlte/dist/img/ETBM4.png" class="img-fluid card-img-top" alt="..."  >
                <div class="card-body">
                <h5 class="card-title">Empresa Transportes Barahona Morazán </h5>
                <p class="card-text">Las Casitas Anillo periférico <br>Honduras C,A. <br>TEL.: 9915 - 6847 / 9902 - 1924 .</p>
                
                </div>
            </div>        
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    
    
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

