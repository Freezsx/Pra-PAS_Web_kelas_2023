@extends('layouts.main')

@section('container')
  <div class="container mt-5">
    <h1 class="display-4 text-center">Kuliner Kudus</h1>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="table">
          <tr>
            <th>Nama</th>
            <th>Foto</th>
            <th>Rasa</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kuliner as $kuliners)
            <tr>
              <td>{{ $kuliners->nama }}</td>
              <td><img src="{{ $kuliners->foto_kuliner }}" alt="" style="max-height: 150px; max-width: 150px;"></td>
              <td>{{ $kuliners->rasa }}</td>
              <td>
                <a href="/kuliner/detail2{{ $kuliners->id }}" class="btn btn-primary">Detail</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
