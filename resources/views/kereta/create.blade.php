<!-- resources/views/kelas/create.blade.php -->

@extends('layouts.app')

@section('title', 'Tambah Kelas')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Tambah Kereta</h2>
          <p class="card-text">Tambah Data Kereta</p>
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
                    <form action="{{ route('kereta.store') }}" method="POST">
                        @csrf
                
                        <div class="form-group">
                            <label for="no_ka">No KA</label>
                            <input type="text" class="form-control" id="no_ka" name="no_ka" value="{{ old('no_ka') }}" required>
                            @error('no_ka')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required>
                            @error('tujuan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas" required>
                                <option value="">Pilih Kelas</option>
                                @foreach($kelasList as $kelas)
                                    <option value="{{ $kelas->nama_kelas }}" {{ old('kelas') == $kelas->nama_kelas ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                            @error('kelas')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kedatangan">Kedatangan</label>
                            <input type="time" class="form-control" id="kedatangan" name="kedatangan" value="{{ old('kedatangan') }}" required>
                            @error('kedatangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keberangkatan">Keberangkatan</label>
                            <input type="time" class="form-control" id="keberangkatan" name="keberangkatan" value="{{ old('keberangkatan') }}" required>
                            @error('keberangkatan')
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