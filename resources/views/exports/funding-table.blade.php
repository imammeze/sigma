<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 10px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        .header { background-color: #f3f4f6; font-weight: bold; text-align: center; }
        .money { text-align: right; white-space: nowrap; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">TABEL SUMBER PENDANAAN</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 30px;">No</th>
                <th>Sumber Pendanaan</th>
                <th>Kategori</th>
                <th>TS-2 (Rp)</th>
                <th>TS-1 (Rp)</th>
                <th>TS (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $total_ts2 = 0; $total_ts1 = 0; $total_ts = 0; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $total_ts2 += $row->ts_2;
                $total_ts1 += $row->ts_1;
                $total_ts += $row->ts;
            @endphp
            <tr>
                <td style="text-align: center;">{{ $key + 1 }}</td>
                <td>{{ $row->sumber_pendanaan }}</td>
                <td>{{ $row->category }}</td>
                <td class="money">{{ number_format($row->ts_2, 0, ',', '.') }}</td>
                <td class="money">{{ number_format($row->ts_1, 0, ',', '.') }}</td>
                <td class="money">{{ number_format($row->ts, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="3">Jumlah Total</td>
                <td class="money">{{ number_format($total_ts2, 0, ',', '.') }}</td>
                <td class="money">{{ number_format($total_ts1, 0, ',', '.') }}</td>
                <td class="money">{{ number_format($total_ts, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>