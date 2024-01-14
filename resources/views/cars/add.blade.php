@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Car</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('cars.store')}}" method="POST">
                @include('cars._form')
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection