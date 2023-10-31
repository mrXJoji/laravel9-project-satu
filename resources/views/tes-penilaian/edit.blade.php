@extends('layout/aplikasi')

@section('konten')
<div class="card-body">
    <form action="/tes-penilaian" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="tanggal_test">Tanggal Tes :</label>
            <input type="date" id="tanggal_test" name="tanggal_test" class="form-control" placeholder="tulis seperti ini->2023-10-14">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>

            
@endsection