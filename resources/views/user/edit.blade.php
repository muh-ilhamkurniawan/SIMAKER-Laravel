@extends('layouts.app')

@section('title', 'Edit Pengguna')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Edit Pengguna</h2>
                <p class="card-text">Edit Data Pengguna</p>
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
                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
                                        @error('username')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="password">Password (biarkan kosong jika tidak ingin mengubah)</label>
                                      <input type="password" class="form-control" id="password" name="password">
                                      @error('password')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="level">Level</label>
                                    <select id="level" class="form-control" name="level" required>
                                      <option value="" disabled selected hidden>---</option>
                                      <option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>ADMIN</option>
                                      <option value="operator" {{ $user->level == 'operator' ? 'selected' : '' }}>OPERATOR</option>
                                    </select>
                                    @error('level')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                                    @error('name')
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
