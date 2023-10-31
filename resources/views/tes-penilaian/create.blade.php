@extends('layout/aplikasi')

@section('konten')
<div class="card-body">
    <form action="/tes-penilaian" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="nama_tes_id" id="nama_tes_id">
                <option disabled value>Pilih Nama Tes</option>
                @foreach ($nam as $item)
                <option value="{{ $item->id}}">{{ $item->nama_tes }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="hasil_tes_id" id="hasil_tes_id">
                <option disabled value>Pilih hasil Tes</option>
                @foreach ($has as $item)
                <option value="{{ $item->id}}">{{ $item->hasil_tes }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="analisa_id" id="analisa_id">
                <option disabled value>Pilih Analisa Tes</option>
                @foreach ($ana as $item)
                <option value="{{ $item->id}}">{{ $item->analisa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="point_tes_id" id="point_tes_id">
                <option disabled value>Pilih Point Tes</option>
                @foreach ($poi as $item)
                <option value="{{ $item->id}}">{{ $item->point_tes }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>

            
@endsection