<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 10px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: center; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">TABEL KONDISI MAHASISWA</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 30px;">No</th>
                <th>Kategori</th>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $sumTs2 = 0; $sumTs1 = 0; $sumTs = 0; $sumTotal = 0; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $sumTs2 += (int)$row->ts_2;
                $sumTs1 += (int)$row->ts_1;
                $sumTs += (int)$row->ts;
                $sumTotal += (int)$row->jumlah;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->kategori }}</td>
                <td>{{ $row->ts_2 }}</td>
                <td>{{ $row->ts_1 }}</td>
                <td>{{ $row->ts }}</td>
                <td style="font-weight: bold;">{{ $row->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Total</td>
                <td>{{ $sumTs2 }}</td>
                <td>{{ $sumTs1 }}</td>
                <td>{{ $sumTs }}</td>
                <td>{{ $sumTotal }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>