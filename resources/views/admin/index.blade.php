<!-- resources/views/admin/index.blade.php -->

@extends('layouts.app')

@section('title', 'Admin List')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Data Pengguna</h2>
                <p class="card-text">Lihat Data Pengguna. </p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                            <!-- table -->
                            <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id_admin }}</td>
                                    <td>{{ $admin->username }}</td>
                                    <td>{{ $admin->password }}</td>
                                    <td>{{ $admin->level }}</td>
                                    <td>{{ $admin->nama }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
