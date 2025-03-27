@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">

                    <table>
                        <tr>
                          <th>ID</th>
                          <th>Nome</th>
                          <th>Ações</th>
                        </tr>
                        @foreach ($categorias as $value)

                        <tr>
                          <td>{{$value->id}}</td>
                          <td>{{$value->nome}}</td>
                          <td><a href="{{ url('categoria/' . $value->id) }}">Visualizar</a></td>
                        </tr>
                        @endforeach

                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
