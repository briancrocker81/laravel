<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Contact Form -->
        <form action="{{ url('contact') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Contact</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Contact
                    </button>
                </div>
            </div>
        </form>
    </div>

    @if (count($contacts) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Address Book Contacts
            </div>

            <div class="panel-body">
                <table class="table table-striped contact-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Contact</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $contact->name }}</div>
                                </td>

                                <td>
                                  <form action="{{ url('contact/'.$contact->id) }}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}

                                      <button type="submit" class="btn btn-danger">
                                          <i class="fa fa-trash"></i> Delete
                                      </button>
                                  </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
