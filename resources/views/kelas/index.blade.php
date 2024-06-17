<!-- resources/views/kelas/index.blade.php -->

@extends('layouts.app')

@section('title', 'Kategori List')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Data Kategori</h2>
          <p class="card-text">Lihat Data Kategori</p>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                        <tr>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelass as $kelas)
                        <tr>
                            <td>{{ $kelas->kode_kelas }}</td>
                            <td>{{ $kelas->nama_kelas }}</td>
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