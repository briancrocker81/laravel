@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <h2>Contacts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('contact.create') }}"> Create New Contact</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($contacts as $key => $contact)
    <tr>
        <td>{{ ++$c }}</td>
        <td>{{ $contact->title }}</td>
        <td>{{ $contact->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('contact.show',$contact->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('contact.edit',$contact->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $contacts->render() !!}

@endsection
