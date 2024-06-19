<!-- resources/views/kelas/create.blade.php -->

@extends('layouts.app')

@section('title', 'Tambah Kelas')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Tambah Pengguna</h2>
          <p class="card-text">Tambah Data Pengguna</p>
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
                    <form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" class="form-control" id="password" name="password"  required>
                          @error('password')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="level">Level</label>
                        <select id="level" class="form-control" name="level" value="{{ old('level') }}" required >
                          <option value="" disabled selected hidden>---</option>
                            <option value="admin">ADMIN</option>
                            <option value="operator">OPERATOR</option>
                          </select>
                        @error('level')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
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