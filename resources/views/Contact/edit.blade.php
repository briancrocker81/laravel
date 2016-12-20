@extends('layouts.app')

@section('content')

    <div id="control-row" class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-xs-left">
                <h2>Edit Contact</h2>
            </div>
            <div class="float-xs-right">
                <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @include ('errors.list')

    {!! Form::model($contact, ['method' => 'PATCH','route' => ['contact.update', $contact->id]]) !!}
      @include ('Contact._form', ['submit_button_text' => 'Update Contact'])
    {!! Form::close() !!}

@endsection
