@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Contact</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @include ('errors.list')

    {!! Form::model($contact, ['method' => 'PATCH','route' => ['contact.update', $contact->id]]) !!}
      @include ('Contact._form', ['submit_button_text' => 'Update Contact'])
    {!! Form::close() !!}

@endsection
