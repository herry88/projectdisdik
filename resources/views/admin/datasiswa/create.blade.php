@extends('main')

@section('title')
    <title>Data Siswa</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data siswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/siswa" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="nisn">NISN :</label>
                            <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
                            @error('nisn')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="namasiswa">Nama Siswa :</label>
                            <input type="text" name="namasiswa" class="form-control" placeholder="Nama siswa" required>
                            @error('namasiswa')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                            @error('alamat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir :</label>
                            <input type="text" name="ttl" class="form-control" placeholder="Contoh : Jakarta, 22 Agustus 2000" required>
                        </div>
                        @error('ttl')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="Jenis_kelamin">Jenis Kelamin :</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki">
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <p class="text-danger">Pilih Jenis Kelamin !</p>
                            @enderror
                        </div>
                        <select class="form-control mb-4" aria-label="Default select example" name="sekolah_id">
                            <option selected value="0">Pilih Sekolah</option>
                            @foreach ($schools as $school)   
                                <option value="{{ $school->id }}">{{ $school->namasekolah }}</option>
                            @endforeach
                        </select>
                        @error('sekolah_id')
                            <p class="text-danger">Pilih Sekolah !</p>
                        @enderror
                        <select class="form-control mb-3" aria-label="Default select example" name="jurusan_id">
                            <option selected value="0">Pilih Jurusan</option>
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id }}">{{ $j->nama }}</option>
                            @endforeach
                        </select>
                        @error('jurusan_id')
                            <p class="text-danger">Pilih Jurusan !</p>
                        @enderror
                        <button class="btn btn-primary mb-3" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
