<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 8px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: center; vertical-align: top; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        .title { text-align: center; font-size: 11px; margin-bottom: 15px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">TABEL KERJASAMA PENGABDIAN KEPADA MASYARAKAT (PKM)</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2" style="width: 25px;">No</th>
                <th rowspan="2">Judul Kerjasama</th>
                <th rowspan="2">Mitra</th>
                <th rowspan="2">Nama Dosen</th>
                <th rowspan="2">Sumber</th>
                <th rowspan="2">Durasi</th>
                <th colspan="3">Pendanaan (Rp juta)</th>
                <th rowspan="2">Status</th>
            </tr>
            <tr class="header">
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $totalTS2 = 0; $totalTS1 = 0; $totalTS = 0; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $totalTS2 += (float)$row->ts_2;
                $totalTS1 += (float)$row->ts_1;
                $totalTS += (float)$row->ts;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->judul_kerjasama }}</td>
                <td class="text-left">{{ $row->mitra_kerjasama }}</td>
                <td class="text-left">{{ $row->nama_dosen }}</td>
                <td>{{ strtoupper($row->sumber) }}</td>
                <td>{{ $row->durasi }}</td>
                <td class="text-right">{{ number_format($row->ts_2, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($row->ts_1, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($row->ts, 0, ',', '.') }}</td>
                <td class="text-left">{{ $row->status }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="6">Total Pendanaan</td>
                <td class="text-right">{{ number_format($totalTS2, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalTS1, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalTS, 0, ',', '.') }}</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>