@extends('main')

@section('title')
    <title>Data Siswa</title>
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
            <h1>Data Siswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Siswa</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="/admin/siswa/create" class="btn btn-primary mb-3">Tambah Data Siswa</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Sekolah</th>
                                    <th>Nama Jurusan</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $s)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->nisn }}</td>
                                <td>{{ $s->namasiswa }}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>{{ $s->jenis_kelamin }}</td>
                                <td>{{ $s->school->namasekolah }}</td>
                                <td>{{ $s->jurusan->nama }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/admin/siswa/{{ $s->id }}/edit"
                                            class="btn btn-warning"><i class="fa fa-pen"></i></a>
                                        <form action="/admin/siswa/{{ $s->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger ml-2" type="submit"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
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
