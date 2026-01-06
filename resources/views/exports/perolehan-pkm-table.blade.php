<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 10px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; vertical-align: top; }
        .header { background-color: #f3f4f6; font-weight: bold; text-align: center; }
        .text-center { text-align: center; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">DAFTAR PEROLEHAN HKI DARI KEGIATAN PKM</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 30px;">No</th>
                <th>Judul HKI</th>
                <th>Jenis HKI</th>
                <th>Nama DTPR</th>
                <th style="width: 60px;">Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $key => $row)
            <tr>
                <td class="text-center">{{ $key + 1 }}</td>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->jenis_hki }}</td>
                <td>{{ $row->nama_dtpr }}</td>
                <td class="text-center">{{ $row->tahun_perolehan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>