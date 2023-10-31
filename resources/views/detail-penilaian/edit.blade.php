@extends('layout/aplikasi')

@section('konten')
<div class="card-body">
    <form action="/detail-penilaian" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="jenis_penilaian">Nama Siswa :</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa">
        </div>

        <div class="form-group">
            <label for="jenis_penilaian">Waktu Mulai:</label>
            <input type="datetime" id="waktu_mulai" name="waktu_mulai" class="form-control" placeholder="tulis seperti ini->2023-10-14 16:53:43">
        </div>

        <div class="form-group">
            <label for="tipe_penilaian">Waktu Selesai:</label>
            <input type="datetime" id="waktu_selesai" name="waktu_selesai" class="form-control" placeholder="tulis seperti ini->2023-10-14 16:53:43">
        </div>

        <div class="form-group">
            <label for="keterangan">Point:</label>
            <input type="text" id="point" name="point" class="form-control" placeholder="tulis di sini">
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan Point:</label>
            <input type="text" id="keterangan_point" name="keterangan_point" class="form-control" placeholder="tulis di sini">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>

            
@endsection