@extends('layouts.main')

@section('container')
<div class="container mt-5">
  <h1 class="display-4 text-center">Wisata Kudus</h1>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="table">
        <tr>
          <th>Nama</th>
          <th>Foto</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wisata as $wisatawan)
          <tr>
            <td>{{ $wisatawan->nama }}</td>
            <td><img src="{{ $wisatawan->foto_wisata }}" alt="" style="max-height: 150px; max-width: 150px;"></td>
            <td>{{ $wisatawan->alamat }}</td>
            <td>
              <a href="/wisata/detail{{ $wisatawan->id }}" class="btn btn-primary">Detail</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
