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
    <div class="title">TABEL KEBERAGAMAN ASAL MAHASISWA</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 30px;">No</th>
                <th>Kategori</th>
                <th>Asal Mahasiswa</th>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $sumTs2 = 0; $sumTs1 = 0; $sumTs = 0; $sumGrandTotal = 0; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $sumTs2 += (int)$row->ts_2;
                $sumTs1 += (int)$row->ts_1;
                $sumTs += (int)$row->ts;
                $sumGrandTotal += (int)$row->total;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->kategori_label }}</td>
                <td class="text-left">{{ $row->nama_asal }}</td>
                <td>{{ $row->ts_2 }}</td>
                <td>{{ $row->ts_1 }}</td>
                <td>{{ $row->ts }}</td>
                <td style="font-weight: bold;">{{ $row->total }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="3">Jumlah Total</td>
                <td>{{ $sumTs2 }}</td>
                <td>{{ $sumTs1 }}</td>
                <td>{{ $sumTs }}</td>
                <td>{{ $sumGrandTotal }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>