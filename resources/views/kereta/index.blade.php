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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keretas as $kereta)
                        <tr>
                            <td>{{ $kereta->no_ka }}</td>
                            <td>{{ $kereta->nama }}</td>
                            <td>{{ $kereta->tujuan }}</td>
                            <td>{{ $kereta->kelas }}</td>
                            <td>{{ $kereta->kedatangan }}</td>
                            <td>{{ $kereta->keberangkatan }}</td>
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