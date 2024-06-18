<!-- resources/views/kelas/create.blade.php -->

@extends('layouts.app')

@section('title', 'Tambah Kelas')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Tambah Kategori</h2>
          <p class="card-text">Tambah Data Kategori</p>
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
                    <form action="{{ route('kelas.store') }}" method="POST">
                        @csrf
                
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas') }}" required>
                            @error('nama_kelas')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
            </div> <!-- simple table -->
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
@endsection