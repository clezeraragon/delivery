@extends('app')

@section('content')

    <div class="container">
        <h3> Produto</h3>

        <a href="{{route("admin.clients.create")}}" class="btn btn-success"/>Novo Cliente</a>
        </br></br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($client as $cliente)

                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->user->name}}</td>
                    <td>
                        <a href="{{route('admin.clients.edit',$cliente->id)}}" class="btn btn-default btn-sm"> Editar </a>
                        <a href="{{route('admin.clients.destroy',$cliente->id)}}" class="btn btn-default btn-sm"> Remover </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $client->render() !!}
    </div>
@endsection