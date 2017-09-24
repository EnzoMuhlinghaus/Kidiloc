@extends('layouts.app')

@section('content')

  <h1>Car List</h1>
  <p class="lead">Here's a list of all the cars. <a href="/{{ route('cars.create') }}">Add a new one?</a></p>
  <hr>

  @if(Session::has('flash_message'))
    <div class="alert alert-success fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      {{ Session::get('flash_message') }}
    </div>
  @endif

  @foreach($cars as $car)
    <h3>{{ $car->title }}</h3>
    <p>{{ $car->description}}</p>

    <div class="row">
      <div class="col-md-6">
        <a href="/{{ route('cars.edit', $car->id) }}" class="btn btn-primary">Edit Car</a>
      </div>
      <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['cars.destroy', $car->id]
        ]) !!}
        {!! Form::submit('Delete this car?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
    </div>
    <hr>
  @endforeach

@stop