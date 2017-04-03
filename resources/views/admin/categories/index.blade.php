@extends('app')

@section('content')

    <div class="container">
        <h3> Categorias</h3>

        <a href="{{route("admin.categories.create")}}" class="btn btn-success"/>Nova categoria</a>
        </br></br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->name}}</td>
                    <td><a href="{{route('admin.categories.edit',$categoria->id)}}" class="btn btn-default btn-sm"/> Editar </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $categorias->render() !!}
    </div>
@endsection