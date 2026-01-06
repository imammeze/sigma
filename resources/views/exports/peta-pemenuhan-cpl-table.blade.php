<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 8px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: center; vertical-align: middle; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
        .title { text-align: center; font-size: 12px; margin-bottom: 15px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">TABEL PETA PEMENUHAN CPL DALAM KURIKULUM</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2">No</th>
                <th rowspan="2">CPL</th>
                <th rowspan="2">CPMK</th>
                <th colspan="8">Semester</th>
            </tr>
            <tr class="header">
                <th>S1</th><th>S2</th><th>S3</th><th>S4</th>
                <th>S5</th><th>S6</th><th>S7</th><th>S8</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $key => $row)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $row->cpl }}</td>
                <td class="text-left">{{ $row->cpmk_label }}</td>
                <td>{{ $row->semester1Course->mata_kuliah ?? '-' }}</td>
                <td>{{ $row->semester2Course->mata_kuliah ?? '-' }}</td>
                <td>{{ $row->semester3Course->mata_kuliah ?? '-' }}</td>
                <td>{{ $row->semester4Course->mata_kuliah ?? '-' }}</td>
                <td>{{ $row->semester5Course->mata_kuliah ?? '-' }}</td>
                <td>{{ $row->semester6Course->mata_kuliah ?? '-' }}</td>
                <td>{{ $row->semester7Course->mata_kuliah ?? '-' }}</td>
                <td>{{ $row->semester8Course->mata_kuliah ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>