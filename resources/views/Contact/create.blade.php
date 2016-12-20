@extends('layouts.app')

@section('content')

    <div id="control-row" class="row">
        <div class="col-md-12">
            <div class="float-xs-left">
                <h2>Create New Contact</h2>
            </div>
            <div class="float-xs-right">
                <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @include ('errors.list')

    {!! Form::open(array('route' => 'contact.store','method'=>'POST')) !!}
      @include ('Contact._form', ['submit_button_text' => 'Add Contact'])
    {!! Form::close() !!}

@endsection
