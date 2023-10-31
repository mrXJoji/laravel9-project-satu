<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ csrf_token()}}">
    <style>
        table.static {
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        } 

    </style>
    <title>CETAK HASIL TES FISIK</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Hasil Tes Fisik</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Nama Tes</th>
                <th>Hasil Tes</th>
                <th>Analisa</th>
                <th>Point Tes</th>
                <th>Aksi</th>
            </tr>
            @foreach ($dtcetaktes_penilaian as $item)
                
            
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->nama_tes->nama_tes}}</td>
                <td>{{ $item->hasil_tes->hasil_tes}}</td>
                <td>{{ $item->analisa->analisa}}</td>
                <td>{{ $item->point_tes->point_tes}}</td>

            </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>