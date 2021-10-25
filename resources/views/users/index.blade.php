@extends('layouts.app', ['activePage' => 'usuario', 'titlePage' => __(' ')])

@section('content')
    <br>
    <br>

    <div class ="text-center mt-3 mb-4">
        <a href="{{url('user/create')}}">
            <button class="btn btn-success">Novo Usuario</button>
        </a>
    </div>
    <div class="col-lg-12 col-md-20">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Usuarios Cadastrados</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                    <th>Nome<th>
                    <th>E-mail<th>
                    <th>Prontuario<th>
                    <th>Nivel<th>
                    <th>Status<th>
                    <th class="text-center">Editar<th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
