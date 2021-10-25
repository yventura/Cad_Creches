@extends('layouts.app', ['activePage' => 'fichas_cadadastradas', 'titlePage' => __('')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Fichas Cadastradas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th class="text-center">Numero de Cadastro</th>
                                        <th class="text-center">Data e Hora do Cadastro</th>
                                        <th class="text-center">Nome</th>
                                        <th class="text-center">Dt. Nasc.</th>
                                        <th class="text-center">Nivel</th>
                                        <th class="text-center">Polo Cadastrado</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">19/10/2021 - 10:00:01</td>
                                            <td class="text-center">Ana Laura</td>
                                            <td class="text-center">11/04/2019</td>
                                            <td class="text-center">INFANTIL 1</td>
                                            <td class="text-center">N.E.I.M. Joana Mussa Gaze</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">19/10/2021 - 10:02:01</td>
                                            <td class="text-center">Ana Claudia</td>
                                            <td class="text-center">11/04/2018</td>
                                            <td class="text-center">INFANTIL 3</td>
                                            <td class="text-center">N.E.I.M. Joana Mussa Gaze</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
