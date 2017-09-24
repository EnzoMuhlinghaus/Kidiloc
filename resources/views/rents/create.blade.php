@extends('layouts.app')

@section('content')

  <h1>Add a New Rent</h1>
  <p class="lead">Add to your rent list below.</p>
  <hr>

  {!! Form::open([
      'route' => 'rents.store'
  ]) !!}

  <div class="form-group">
    {!! Form::label('rent_date_beginning', 'Beginning date:', ['class' => 'control-label']) !!}
    {!! Form::date('rent_date_beginning', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('rent_date_ending', 'Ending date:', ['class' => 'control-label']) !!}
    {!! Form::date('rent_date_ending', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('customer_email', 'Customer email:', ['class' => 'control-label']) !!}
    {!! Form::email('customer_email', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('car_id', 'Car id:', ['class' => 'control-label']) !!}
    {!! Form::text('car_id', $car, ['class' => 'form-control', 'readonly' => 'true', 'value' => $car]) !!}
  </div>

  {!! Form::submit('Create New Rent', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
@stop