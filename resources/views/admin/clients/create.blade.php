@extends('app')

@section('content')

    <div class="container">
        <h3> Novo Produto</h3>

       @include("errors._check")

        {!! Form::open(['route' => 'admin.products.store','class'=> 'form']) !!}
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
            {!! Form::submit('Criar Produto',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection