@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nivel de Satisfaccion</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <p class="text-left">
                        Tienda

  <select name="" id="input" class="form-control" required="required">
    @foreach ($tiendas as $tienda)
    <option value="">{{ $tienda->nom_tienda }}</option>
      
    @endforeach
  </select>

                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary">Buscar</button>
                        </span>
                    </p>


<!-- BAR CHART -->
<div class="box box-warning">
<div class="box-header with-border">
  <h3 class="box-title">Estadística por Tienda</h3>

  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
    </button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<div class="box-body">
  <div class="chart">
    <canvas id="barChart" style="height: 117px; width: 385px;" width="232 " height="117"></canvas>
  </div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->                    
                </div>
            </div>
        </div>

        <div class="col-md-12">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Listados </h3>
                </div>
                <div class="panel-body">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Atributos</th>
                              <th scope="col">Base</th>
                              <th scope="col">Notas 6+7</th>
                              <th scope="col">Notas 1 a 4</th>
                              <th scope="col">Neta</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if (!empty($datos)) {

                            @foreach ($datos as $dato)
                                <tr>
                                  <th scope="row">{{ $dato["nombre"]->nom_pregunta  }}</th>
                                  <td>{{ $dato["base"]  }}</td>
                                  <td>{{ $dato["satisfaccion"]  }}</td>
                                  <td>{{ $dato["insatisfaccion"]  }}</td>
                                  <td>{{ $dato["neta"]  }}</td>
                                </tr>                                  
                            @endforeach
@endif
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
