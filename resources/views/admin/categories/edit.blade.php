@extends('app')

@section('content')

    <div class="container">
        <h3> Editar Categoria</h3>

       @include('errors._check')

        {!! Form::model($categorias,['route' => ['admin.categories.update',$categorias->id],'class'=> 'form']) !!}
        <div class="form-group">
            {!! Form::label('Name','nome:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar categoria',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection