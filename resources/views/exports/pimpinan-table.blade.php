<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 10px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        .header { background-color: #f3f4f6; font-weight: bold; text-align: center; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="title">DAFTAR PIMPINAN</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 30px;">No</th>
                <th>Unit Kerja</th>
                <th>Nama Ketua</th>
                <th>Periode Jabatan</th>
                <th>Pendidikan Terakhir</th>
                <th>Jabatan Fungsional</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $key => $row)
            <tr>
                <td style="text-align: center;">{{ $key + 1 }}</td>
                <td>{{ $row->unit_kerja }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->periode }}</td>
                <td>{{ $row->pendidikan_terakhir }}</td>
                <td>{{ $row->jabatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>