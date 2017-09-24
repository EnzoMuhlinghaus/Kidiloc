@extends('layouts.app')

@section('content')

  <h1>Add a New Car</h1>
  <p class="lead">Add to your car list below.</p>
  <hr>

  {!! Form::open([
      'route' => 'cars.store'
  ]) !!}

  <div class="form-group">
    {!! Form::label('model', 'Model:', ['class' => 'control-label']) !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('brand', 'Brand:', ['class' => 'control-label']) !!}
    {!! Form::text('brand', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('daily_rate', 'Daily rate:', ['class' => 'control-label']) !!}
    {!! Form::number('daily_rate', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('category_id', 'Category:', ['class' => 'control-label']) !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
  </div>

  {!! Form::submit('Create New Car', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
@stop