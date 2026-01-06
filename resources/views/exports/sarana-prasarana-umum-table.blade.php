<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: center; vertical-align: top; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
        .title { text-align: center; font-size: 13px; margin-bottom: 15px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">DAFTAR SARANA DAN PRASARANA</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2" style="width: 30px;">No</th>
                <th rowspan="2">Nama Prasarana</th>
                <th colspan="2">Daya & Luas</th>
                <th rowspan="2">Status</th>
                <th rowspan="2">Lisensi</th>
                <th rowspan="2">Perangkat</th>
                <th rowspan="2">Link Bukti</th>
            </tr>
            <tr class="header">
                <th>Daya</th>
                <th>Luas (m²)</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $totalLuas = 0; 
                $totalDaya = 0;
            @endphp
            @foreach($records as $key => $row)
            @php
                $totalLuas += (float)$row->luas_ruang;
                $totalDaya += (int)$row->daya_tampung;
                
                // Menerjemahkan Status
                $statusLabel = $row->status === 'milik' ? 'Milik Sendiri' : 'Sewa';
                
                // Menerjemahkan Lisensi
                $lisensiLabel = match ($row->lisensi) {
                    'berlisensi'      => 'Berlisensi',
                    'public_domain'   => 'Public Domain',
                    'tidak_berlisensi'=> 'Tidak Berlisensi',
                    default           => ucfirst((string)$row->lisensi ?: '-'),
                };
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->nama_prasarana }}</td>
                <td>{{ $row->daya_tampung }}</td>
                <td>{{ $row->luas_ruang }}</td>
                <td>{{ $statusLabel }}</td>
                <td>{{ $lisensiLabel }}</td>
                <td class="text-left">{{ strip_tags($row->perangkat) }}</td>
                <td class="text-left">
                    @if($row->link_bukti)
                        @foreach(preg_split('/[\r\n]+/', trim($row->link_bukti)) as $link)
                            {{ trim($link) }}<br>
                        @endforeach
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Total</td>
                <td>{{ $totalDaya }}</td>
                <td>{{ number_format($totalLuas, 2, ',', '.') }}</td>
                <td colspan="4"></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>