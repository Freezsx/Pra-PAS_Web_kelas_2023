@extends('layouts.main')

@section('container')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">{{ $wisata->nama }}</h1>
        <img src="{{ $wisata->foto_wisata }}" class="img-fluid rounded mb-3" alt="{{ $wisata->nama }}">
        <p><strong>Alamat:</strong> {{ $wisata->alamat }}</p>
        <p><strong>Detail:</strong> {{ $wisata->detail }}</p>

        <a href="/wisata/all" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
@endsection
