<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: center; vertical-align: top; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">DAFTAR KERJASAMA PENELITIAN</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2" style="width: 30px;">No</th>
                <th rowspan="2">Judul Kerjasama</th>
                <th rowspan="2">Mitra Kerjasama</th>
                <th rowspan="2">Sumber</th>
                <th rowspan="2">Durasi</th>
                <th colspan="3">Jumlah Dana Kerjasama (Rp)</th>
            </tr>
            <tr class="header">
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $sumTS2 = 0; $sumTS1 = 0; $sumTS = 0; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $sumTS2 += (float)$row->ts_2;
                $sumTS1 += (float)$row->ts_1;
                $sumTS += (float)$row->ts;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->judul_kerjasama }}</td>
                <td class="text-left">{{ $row->mitra_kerjasama }}</td>
                <td>{{ strtoupper($row->sumber) }}</td>
                <td>{{ $row->durasi }} Thn</td>
                <td class="text-right">{{ number_format($row->ts_2, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($row->ts_1, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($row->ts, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="5">Total Dana</td>
                <td class="text-right">{{ number_format($sumTS2, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($sumTS1, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($sumTS, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>