@extends('layouts.main')

@section('container')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">{{ $sekolah->name }}</h1>
        <p><strong>Alamat:</strong> {{ $sekolah->alamat }}</p>
        <p><strong>Tanggal:</strong> {{ $sekolah->tanggal }}</p>
        <p><strong>Detail:</strong> {{ $sekolah->detail }}</p>

        <a href="/sekolah/sekolah" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
@endsection
