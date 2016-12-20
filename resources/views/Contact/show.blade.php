@extends('layouts.app')

@section('content')

  <div id="control-row" class="row">
    <div class="col-md-12">
      <div class="float-xs-left">
        <h2> Show Contact</h2>
      </div>
      <div class="float-xs-right">
        <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <strong>Title:</strong>
        {{ $contact->title }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Name:</strong>
        {{ $contact->name }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Company Name:</strong>
        {{ $contact->company_name }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Job Title:</strong>
        {{ $contact->job_title }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Email:</strong>
        {{ $contact->email }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Phone Number:</strong>
        {{ $contact->phone_number }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Mobile Number:</strong>
        {{ $contact->mobile_number }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Address:</strong>
        {{ $contact->address }}
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Notes:</strong>
        {{ $contact->notes }}
      </div>
    </div>

  </div>

@endsection
