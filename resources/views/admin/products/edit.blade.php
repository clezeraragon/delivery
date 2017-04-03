@extends('app')

@section('content')

    <div class="container">
        <h3> Editar Produto</h3>

       @include('errors._check')

        {!! Form::model($products,['route' => ['admin.products.update',$products->id],'class'=> 'form']) !!}
        <div class="form-group">
            {!! Form::label('category','categoria:') !!}
            {!! Form::select('category_id',$listsCategory,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Name','nome:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','Descrição:') !!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price','Preço:') !!}
            {!! Form::text('price',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection