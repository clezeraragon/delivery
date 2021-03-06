@extends('app')

@section('content')

    <div class="container">
        <h3> Produto</h3>

        <a href="{{route("admin.products.create")}}" class="btn btn-success"/>Novo Produto</a>
        </br></br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-default btn-sm"> Editar </a>
                        <a href="{{route('admin.products.destroy',$product->id)}}" class="btn btn-default btn-sm"> Remover </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
@endsection