@extends('layouts.app')

@section('content')

  <h1>Rent List</h1>
  <p class="lead">Here's a list of all the rents.
  <hr>

  @if(Session::has('flash_message'))
    <div class="alert alert-success fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      {{ Session::get('flash_message') }}
    </div>
  @endif

  @foreach($rents as $rent)
    <h3>{{ $rent->car->model }} rented  from {{ $rent->rent_date_beginning }} to {{ $rent->rent_date_ending }}</h3>

    <div class="row">
      <div class="col-md-6">
        <a href="/{{ route('rents.edit', $rent->id) }}" class="btn btn-primary">Edit Rent</a>
      </div>
      <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['rents.destroy', $rent->id]
        ]) !!}
        {!! Form::submit('Delete this rent?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
    </div>
    <hr>
  @endforeach

@stop