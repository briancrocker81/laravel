<div class="row">

  <div class="col-md-2">
    <div class="form-group">
      <strong>Title:</strong>
      {!! Form::select('title', ['Mr' => 'Mr', 'Mrs' => 'Mrs', 'Miss' => 'Miss', 'Ms' => 'Ms', 'Dr' => 'Dr'], null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Name:</strong>
      {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Company Name:</strong>
      {!! Form::text('company_name', null, array('placeholder' => 'Company Name','class' => 'form-control')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Job Title:</strong>
      {!! Form::text('job_title', null, array('placeholder' => 'Job Title','class' => 'form-control')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Email:</strong>
      {!! Form::email('email', $value = null, array('placeholder' => 'Email Address','class' => 'form-control')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Phone Number:</strong>
      {!! Form::text('phone_number', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Mobile Number:</strong>
      {!! Form::text('mobile_number', null, array('placeholder' => 'Mobile Number','class' => 'form-control')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Address:</strong>
      {!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control','style'=>'height:100px')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Notes:</strong>
      {!! Form::textarea('notes', null, array('placeholder' => 'Notes','class' => 'form-control','style'=>'height:100px')) !!}
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    {!! Form::submit($submit_button_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>
