<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 11px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">TABEL PEMETAAN CPL TERHADAP PROFIL LULUSAN (PL)</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 50px;">No</th>
                <th>Capaian Pembelajaran Lulusan (CPL)</th>
                <th>Profil Lulusan (PL)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $key => $row)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $row->cpl }}</td>
                <td>{{ $row->pl }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>