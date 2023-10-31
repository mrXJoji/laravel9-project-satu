@extends('layout/aplikasi')

@section('konten')
<div class="card-body">
    <form action="/penilaian" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="jenis_penilaian">Nama Siswa:</label>
            <input type="text" id="nama" name="Nama Siswa" class="form-control" placeholder="Nama Siswa">
        </div>

        <div class="form-group">
            <label for="jenis_penilaian">Jenis Penilaian:</label>
            <input type="text" id="jenis_penilaian" name="jenis_penilaian" class="form-control" placeholder="Jenis Penilaian" value="{{ $peg->jenis_penilaian }}">
        </div>

        <div class="form-group">
            <label for="tipe_penilaian">Tipe Penilaian:</label>
            <select id="tipe_penilaian" name="tipe_penilaian" class="form-control">
                <option value="naik">Naik</option>
                <option value="turun">Turun</option>
            </select>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
</div>

            
@endsection