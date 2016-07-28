@extends('app')

@section('content')

<div class="container">

    <h3>Create Category</h3>

    @include('errors._check')

    {!! Form::open(['route'=>'admin.categories.store']) !!}

    @include('admin.categories._form')

    <div class="form-group">
        {!! Form::submit('Criar categoria',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection
