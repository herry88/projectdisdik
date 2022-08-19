@extends('main')

@section('title')
    <title>Data Industri</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Industri</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Industri</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('industri.create') }}" class="btn btn-primary mb-3">Tambah Data Industri</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($industri as $i)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->nama }}</td>
                                        <td>{{ $i->alamat }}</td>
                                        <td>{{ $i->no_telp }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/admin/industri/{{ $i->id }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-pen"></i></a>
                                                <form action="/admin/industri/{{ $i->id }}" method="post">
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
    </section>
@endsection
