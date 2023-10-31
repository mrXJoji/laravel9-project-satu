@extends('layout/aplikasi')

@section('konten')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Table Detail Penilaian</h1>
<p class="mb-4"> aplikasi web untuk calon siswa polisi yang mengikuti tes fisik adalah komponen yang lebih terperinci dan rinci daripada tabel penilaian umum. Tabel ini biasanya digunakan untuk memberikan pandangan yang lebih mendalam tentang setiap komponen tes fisik yang dinilai untuk setiap calon siswa. <a target="_blank"
        href="https://datatables.net"></a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <a href="/detail-penilaian/create" class="btn btn-primary">Tambah Detail Penilaian</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Point</th>
                        <th>Keterangan Point</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtdetail_penilaian as $item)
                        
                    
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->waktu_mulai}}</td>
                        <td>{{ $item->waktu_selesai}}</td>
                        <td>{{ $item->point}}</td>
                        <td>{{ $item->keterangan_point}}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ url('/detail-penilaian/edit', $item->id) }}">Edit</a> 
                            <a class="btn btn-danger btn-sm" href="{{ url('/detail-penilaian/delete', $item->id) }}">Delete</a>
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