@extends('layouts.main')

@section('container')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">{{ $kuliner->nama }}</h1>
        <img src="{{ $kuliner->foto_kuliner }}" class="img-fluid rounded mb-3" alt="{{ $kuliner->nama }}">
        <p><strong>Rasa:</strong> {{ $kuliner->rasa }}</p>
        <p><strong>Detail:</strong> {{ $kuliner->detail }}</p>

        <a href="/kuliner/all2" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
@endsection
