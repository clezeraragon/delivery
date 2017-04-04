@extends('app')

@section('content')

    <div class="container">
        <h3> Novo Cliente</h3>

       @include("errors._check")

        {!! Form::open(['route' => 'admin.clients.store','class'=> 'form']) !!}
        <div class="form-group">
            {!! Form::label('Name','nome:') !!}
            {!! Form::text('users[name]',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','E-mail:') !!}
            {!! Form::text('users[email]',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Telefone','Telefone:') !!}
            {!! Form::text('phone',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Endereço','Endereço:') !!}
            {!! Form::textarea('address',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Cidade','Cidade:') !!}
            {!! Form::text('city',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Estado','Estado:') !!}
            {!! Form::text('state',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('CEP','CEP:') !!}
            {!! Form::text('zipcode',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('salvar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection