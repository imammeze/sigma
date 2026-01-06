<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: center; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Tabel 1.A.4 Rata-rata Beban DTPR per Semester (EWMP)</h2>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2">No</th>
                <th rowspan="2">Nama DTPR</th>
                <th colspan="3">SKS Pengajaran pada</th>
                <th rowspan="2">SKS Penelitian</th>
                <th rowspan="2">SKS Pengabdian</th>
                <th colspan="2">SKS Manajemen</th>
                <th rowspan="2">Total SKS</th>
            </tr>
            <tr class="header">
                <th>PS Sendiri</th>
                <th>PS Lain, PT Sendiri</th>
                <th>PT Lain</th>
                <th>PT Sendiri</th>
                <th>PT Lain</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sums = [
                    'ps_sendiri' => 0, 'ps_lain' => 0, 'pt_lain' => 0,
                    'penelitian' => 0, 'pengabdian' => 0,
                    'man_sendiri' => 0, 'man_lain' => 0, 'total' => 0
                ];
                $count = $records->count();
            @endphp
            @foreach($records as $key => $row)
                @php
                    $sums['ps_sendiri'] += $row->sks_ps_sendiri;
                    $sums['ps_lain'] += $row->sks_ps_lain_pt_sendiri;
                    $sums['pt_lain'] += $row->sks_pt_lain;
                    $sums['penelitian'] += $row->sks_penelitian;
                    $sums['pengabdian'] += $row->sks_pengabdian;
                    $sums['man_sendiri'] += $row->sks_manajemen_pt_sendiri;
                    $sums['man_lain'] += $row->sks_manajemen_pt_lain;
                    $sums['total'] += $row->total_sks;
                @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td class="text-left">{{ $row->nama_dtpr }}</td>
                    <td>{{ $row->sks_ps_sendiri }}</td>
                    <td>{{ $row->sks_ps_lain_pt_sendiri }}</td>
                    <td>{{ $row->sks_pt_lain }}</td>
                    <td>{{ $row->sks_penelitian }}</td>
                    <td>{{ $row->sks_pengabdian }}</td>
                    <td>{{ $row->sks_manajemen_pt_sendiri }}</td>
                    <td>{{ $row->sks_manajemen_pt_lain }}</td>
                    <td>{{ $row->total_sks }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Rata-rata</td>
                @foreach(['ps_sendiri', 'ps_lain', 'pt_lain', 'penelitian', 'pengabdian', 'man_sendiri', 'man_lain', 'total'] as $field)
                    <td>{{ $count > 0 ? round($sums[$field] / $count, 2) : 0 }}</td>
                @endforeach
            </tr>
        </tfoot>
    </table>
</body>
</html>