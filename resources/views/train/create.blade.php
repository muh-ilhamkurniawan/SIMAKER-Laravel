@extends('layouts.app')

@section('title', 'Tambah Kereta')

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
                                <form action="{{ route('train.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="id">No KA</label>
                                        <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}" required>
                                        @error('id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="destination">Tujuan</label>
                                        <input type="text" class="form-control" id="destination" name="destination" value="{{ old('destination') }}" required>
                                        @error('destination')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Kategori</label>
                                        <select class="form-control" id="category" name="category" required>
                                            <option value="">Pilih kategori Kereta</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->name }}" {{ old('category') == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="arrival">Kedatangan</label>
                                        <input type="time" class="form-control" id="arrival" name="arrival" value="{{ old('arrival') }}" required>
                                        @error('arrival')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="departure">Keberangkatan</label>
                                        <input type="time" class="form-control" id="departure" name="departure" value="{{ old('departure') }}" required>
                                        @error('departure')
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
