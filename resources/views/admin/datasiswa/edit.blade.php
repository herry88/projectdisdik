@extends('main')

@section('title')
    <title>Edit Data Siswa</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Data siswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/siswa/{{ $siswa->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nisn">NISN :</label>
                            <input type="text" name="nisn" class="form-control" placeholder="NISN" value="{{ old('nisn', $siswa->nisn) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="namasiswa">Nama Siswa :</label>
                            <input type="text" name="namasiswa" class="form-control" placeholder="Nama siswa" value="{{ old('namasiswa', $siswa->namasiswa) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ old('alamat', $siswa->alamat) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Tempat Tanggal Lahir :</label>
                            <input type="text" name="ttl" class="form-control" placeholder="Contoh : Jakarta, 22 Agustus 2000" value="{{ old('ttl', $siswa->ttl) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="Jenis_kelamin">Jenis Kelamin :</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki" @checked($siswa->jenis_kelamin == "laki-laki" ? true : false)>
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" @checked($siswa->jenis_kelamin == "perempuan" ? true : false)>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <select class="form-control mb-4" aria-label="Default select example" name="sekolah_id">
                            <option value={{ $siswa->school->id }}>{{ $siswa->school->namasekolah }}</option>
                            @foreach ($schools as $school)
                                @if ($siswa->school->id == $school->id)
                                    @continue
                                @endif                            
                                <option value="{{ $school->id }}">{{ $school->namasekolah }}</option>
                            @endforeach
                        </select>
                        <select class="form-control mb-3" aria-label="Default select example" name="jurusan_id">
                            <option value={{ $siswa->jurusan->id }}>{{ $siswa->jurusan->nama }}</option>
                            @foreach ($jurusan as $j)
                                @if ($j->id == $siswa->jurusan->id)
                                    @continue
                                @endif
                                <option value="{{ $j->id }}">{{ $j->nama }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary mb-3" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection