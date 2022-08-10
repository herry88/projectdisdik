@extends('main')

@section('title')
<title>Data Sekolah PK</title>
@endsection

@section('css')
    <style>
        table{
            white-space : nowrap;
        }
    </style>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Sekolah PK</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Sekolah PK</h4>
                </div>
                <div class="card-body">
                    <a href="/admin/sekolah-pk/create" class="btn btn-primary mb-3">Tambah Sekolah PK</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Wilayah DKI</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Akademik</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schools as $school)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $school->namasekolah }}</td>
                                                <td>{{ $school->alamat }}</td>
                                                <td>{{ $school->wilayahDKI->namawilayah }}</td>
                                                <td>{{ $school->jurusan->nama }}</td>
                                                <td>{{ $school->tahunAkademik->namatahunakademik }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning"><i class="bi bi-pen-fill"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="bi bi-trash2"></i></a>
                                                </td>
                                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

