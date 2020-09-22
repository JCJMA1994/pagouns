@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-light navbar-expand-xl" >
        <div class="container">
            <main>
                <div class="container mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center"><strong>Lista de Pagos</strong></h4>
                            <form   method="post">
                                <div class="navbar-form">
                                    <div class="table-responsive d-none d-md-block">
                                        <table class="table table-sm table-bordered bn-table-rounded table-responsive" >
                                            <thead class="thead-dark">
                                            <tr class="text-secondary font-weight-bold">
                                                <th>Codigo Pago</th>
                                                <th>Concepto</th>
                                                <th>Oficina</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($pago as $pagos)
                                                    <tr>
                                                    <td>{{$pagos->conceptopago}}</td>
                                                    <td>{{$pagos->concepto}}</td>
                                                    <td>{{$pagos->oficina}}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </form>

                            <form id="app" method="post">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="{{route('stripe')}}" class="btn btn-success">Continuar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


@endsection
