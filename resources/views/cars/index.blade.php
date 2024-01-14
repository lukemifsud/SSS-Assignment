@extends('layouts.main')

@section('content')
<h1> All Cars <h1>
<a href="{{ route('cars.add') }}">Add Car</a>
<a href="{{ route('cars.show') }}">Show all cars</a>
@endsection