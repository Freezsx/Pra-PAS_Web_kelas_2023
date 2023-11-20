@extends('layouts.main')

@section('container')
<div class="container mt-5">
  <h1 class="display-4 text-center">Sekolah Kudus</h1>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="table">
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sekolah as $sekolahs)
          <tr>
            <td>{{ $sekolahs->name }}</td>
            <td>{{ $sekolahs->alamat }}</td>
            <td>
              <a href="/sekolah/detail3{{ $sekolahs->id }}" class="btn btn-primary">Detail</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
