<!-- resources/views/kereta/index.blade.php -->

@extends('layouts.app')

@section('title', 'Kereta List')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Data Kereta</h2>
          <p class="card-text">Lihat Data </p>
          @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                        <tr>
                            <th>No KA</th>
                            <th>Nama KA</th>
                            <th>Tujuan</th>
                            <th>Kelas</th>
                            <th>Kedatangan</th>
                            <th>Keberangkatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->name }}</td>
                            <td>{{ $train->destination }}</td>
                            <td>{{ $train->category }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $train->arrival)->format('H:i') }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $train->departure)->format('H:i') }}</td>
                            <td>
                              <a href="{{ route('train.edit', $train->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                              <form action="{{ route('train.destroy', $train->id) }}" method="POST" style="display: inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kereta ini?')">Hapus</button>
                              </form>
                          </td>
                          
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- simple table -->
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
@endsection