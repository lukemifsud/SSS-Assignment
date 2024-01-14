@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Car</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('cars.update', $cars->id)}}" method="POST">
                @method('PUT')
                @csrf
                @include('cars._form')
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection