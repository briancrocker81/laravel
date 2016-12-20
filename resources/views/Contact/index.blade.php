@extends('layouts.app')

@section('content')

    <div id="control-row" class="row">
        <div class="col-md-12">
            <div class="float-xs-left">
                <h2>Contacts</h2>
            </div>
            <div class="float-xs-right">
                <a class="btn btn-secondary" href="{{ route('contact.create') }}"> Create New Contact</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($contacts as $key => $contact)
          <tr>
            <td>{{ ++$c }}</td>
            <td>{{ $contact->title }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->company_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone_number }}</td>
            <td>
              <a class="btn btn-info" href="{{ route('contact.show',$contact->id) }}">Show</a>
              <a class="btn btn-primary" href="{{ route('contact.edit',$contact->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    {!! $contacts->render() !!}

@endsection
