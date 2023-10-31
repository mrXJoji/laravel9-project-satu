@extends('layout/aplikasi')

@section('konten')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Table Hasil Penilaian</h1>
<p class="mb-4">aplikasi web calon siswa polisi tes fisik adalah komponen penting yang digunakan untuk menampilkan ringkasan atau hasil akhir penilaian calon siswa setelah mereka telah menyelesaikan tes fisik. Tabel ini memberikan gambaran umum tentang seberapa baik calon siswa telah tampil dalam tes fisik dan apakah mereka memenuhi syarat untuk penerimaan ke kepolisian.  <a target="_blank"
        href="https://datatables.net"></a></p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <a href="/tes-penilaian/create" class="btn btn-primary">Tambah Data Siswa</a>
                <a href="/tes-penilaian/cetak-tes-penilaian" target="_blank" class="btn btn-success">Cetak Hasil Tes Fisik</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama siswa</th>
                        <th>Hasil Tes</th>
                        <th>Analisa</th>
                        <th>Point Tes</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dttes_penilaian as $item)
                        
                    
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->nama_tes->nama_tes}}</td>
                        <td>{{ $item->hasil_tes->hasil_tes}}</td>
                        <td>{{ $item->analisa->analisa}}</td>
                        <td>{{ $item->point_tes->point_tes}}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ url('/tes-penilaian/edit', $item->id) }}">Edit</a> 
                            <a class="btn btn-danger btn-sm" href="{{ url('/tes-penilaian/delete', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection