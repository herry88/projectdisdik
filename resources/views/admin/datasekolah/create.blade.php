@extends('main')

@section('title')
    <title>Data Sekolah PK</title>
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
                    <form action="/admin/sekolah-pk" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="namasekolah">Nama Sekolah</label>
                            <input type="text" name="namasekolah" class="form-control @error('namasekolah') is-invalid @enderror" placeholder="Nama Sekolah" required> 
                            @error("namasekolah")
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" required>
                            @error("alamat")
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Data Jurusan</label>
                            <select name="jurusan_id" class="form-control">
                                <option value="0">-Pilih Jurusan -</option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama }}</option>
                                @endforeach
                            </select>
                            @error("jurusan_id")
                                <p class="text-danger">Tolong Pilih Jurusan</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Data Wilayah</label>
                            <select name="wilayah_dki_id" class="custom-select">
                                <option value="0">- Pilih Wilayah -</option>
                                @foreach ($wilayah as $w)
                                    <option value="{{ $w->id }}">{{ $w->namawilayah }}</option>
                                @endforeach
                            </select>
                            @error("wilayah_dki_id")
                                <p class="text-danger">Tolong Pilih Wilayah</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Akademik</label>
                            <select name="tahun_akademik_id" class="form-control">
                                <option value="0">- Pilih Tahun Akademik -</option>
                                @foreach ($tahunakademik as $t)
                                    <option value="{{ $t->id }}">{{ $t->namatahunakademik }} ({{ $t->semester }})</option>
                                @endforeach
                            </select>
                            @error("tahun_akademik_id")
                                <p class="text-danger">Tolong Pilih Tahun Akademik</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
