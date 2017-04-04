@extends('app')

@section('content')

    <div class="container">
        <h3> Clientes</h3>

        <a href="{{route("admin.clients.create")}}" class="btn btn-success"/>Novo Cliente</a>
        </br></br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->users->name}}</td>
                    <td>{{$client->users->email}}</td>
                    <td><a href="{{route('admin.clients.edit',$client->id)}}" class="btn btn-default btn-sm"/> Editar </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $clients->render() !!}
    </div>
@endsection