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
    <div class="title">TABEL FLEKSIBILITAS PEMBELAJARAN</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2" style="width: 30px;">No</th>
                <th rowspan="2">Tahun Akademik / Bentuk Pembelajaran</th>
                <th colspan="3">Tahun Akademik</th>
                <th rowspan="2">Link Bukti</th>
            </tr>
            <tr class="header">
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $sumTs2 = 0; $sumTs1 = 0; $sumTs = 0; 
            @endphp
            @foreach($records as $key => $row)
            @php
                // Logika summary: Abaikan baris "Jumlah Mahasiswa Aktif"
                if (trim($row->item_label) !== 'Jumlah Mahasiswa Aktif') {
                    $sumTs2 += (int)$row->ts_2;
                    $sumTs1 += (int)$row->ts_1;
                    $sumTs += (int)$row->ts;
                }
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->item_label }}</td>
                <td>{{ $row->ts_2 }}</td>
                <td>{{ $row->ts_1 }}</td>
                <td>{{ $row->ts }}</td>
                <td class="text-left">{{ $row->evidence_link ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Jumlah (Tanpa Mhs Aktif)</td>
                <td>{{ $sumTs2 }}</td>
                <td>{{ $sumTs1 }}</td>
                <td>{{ $sumTs }}</td>
                <td>-</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>