<!-- resources/views/keterlambatan/index.blade.php -->

@extends('layouts.app')

@section('title', 'Keterlambatan List')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Data Keterlambatan</h2>
          <p class="card-text">Lihat Data Keterlambatan</p>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>No KA</th>
                          <th>Nama KA</th>
                          <th>Kategori</th>
                          <th>Jumlah Terlambat</th>
                          <th>Total Waktu Keterlambatan Kedatangan</th>
                          <th>Total Waktu Keterlambatan Keberangkatan</th>
                          <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keterlambatans as $keterlambatan)
                        <tr>
                            <td>{{ $keterlambatan->id }}</td>
                            <td>{{ $keterlambatan->no_ka }}</td>
                            <td>{{ $keterlambatan->tanggal }}</td>
                            <td>{{ $keterlambatan->kedatangan }}</td>
                            <td>{{ $keterlambatan->keberangkatan }}</td>
                            <td>{{ $keterlambatan->lama_datang }} menit</td>
                            <td>{{ $keterlambatan->lama_berangkat }} menit</td>
                            <td>{{ $keterlambatan->alasan }}</td>
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