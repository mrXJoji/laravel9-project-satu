@extends('layout/aplikasi')

@section('konten')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Penilaian</h1>
<p class="mb-4">Table penilaian dalam aplikasi web calon siswa polisi tes fisik adalah elemen penting yang digunakan untuk mencatat dan menilai hasil dari tes fisik calon siswa polisi. Table ini membantu dalam melacak dan mengorganisir data tes fisik yang mencakup berbagai aspek seperti lari, sit-up, push-up, atau elemen-elemen lain yang dinilai dalam tes fisik tersebut. <a target="_blank"
        href="https://datatables.net"></a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <a href="/penilaian/create" class="btn btn-primary">Tambah Penilaian</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Penilaian</th>
                        <th>Tipe Penilaian</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtPenilaian as $item)
                        
                    
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->jenis_penilaian}}</td>
                        <td>{{ $item->tipe_penilaian}}</td>
                        <td>{{ $item->keterangan}}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ url('/penilaian/edit', $item->id) }}">Edit</a> 
                            <a class="btn btn-danger btn-sm" href="{{ url('/penilaian/delete', $item->id) }}">Delete</a>
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