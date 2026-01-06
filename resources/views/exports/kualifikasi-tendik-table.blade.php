<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: center; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
        .title { text-align: center; font-size: 12px; margin-bottom: 15px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">TABEL KUALIFIKASI TENAGA KEPENDIDIKAN</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2">No</th>
                <th rowspan="2">Jenis Tenaga Kependidikan</th>
                <th colspan="8">Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir</th>
                <th rowspan="2">Unit Kerja</th>
            </tr>
            <tr class="header">
                <th>S3</th><th>S2</th><th>S1</th><th>D4</th><th>D3</th><th>D2</th><th>D1</th><th>SMA/K</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totals = ['s3'=>0,'s2'=>0,'s1'=>0,'d4'=>0,'d3'=>0,'d2'=>0,'d1'=>0,'sma'=>0];
            @endphp
            @foreach($records as $key => $row)
                @php
                    foreach($totals as $grade => $val) { $totals[$grade] += (int)$row->$grade; }
                @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td class="text-left">{{ $row->jenis_tendik }}</td>
                    <td>{{ $row->s3 }}</td><td>{{ $row->s2 }}</td><td>{{ $row->s1 }}</td>
                    <td>{{ $row->d4 }}</td><td>{{ $row->d3 }}</td><td>{{ $row->d2 }}</td>
                    <td>{{ $row->d1 }}</td><td>{{ $row->sma }}</td>
                    <td class="text-left">{{ $row->unit_kerja }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Jumlah</td>
                @foreach($totals as $total)
                    <td>{{ $total }}</td>
                @endforeach
                <td>-</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>