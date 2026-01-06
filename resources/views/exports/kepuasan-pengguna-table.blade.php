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
    <div class="title">TINGKAT KEPUASAN PENGGUNA LULUSAN</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2" style="width: 30px;">No</th>
                <th rowspan="2">Jenis Kemampuan</th>
                <th colspan="4">Tingkat Kepuasan Pengguna (%)</th>
                <th rowspan="2">Rencana Tindak Lanjut</th>
            </tr>
            <tr class="header">
                <th>Sangat Baik</th>
                <th>Baik</th>
                <th>Cukup</th>
                <th>Kurang</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $totals = ['vg' => 0, 'g' => 0, 'f' => 0, 'p' => 0]; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $totals['vg'] += (float)$row->very_good;
                $totals['g'] += (float)$row->good;
                $totals['f'] += (float)$row->fair;
                $totals['p'] += (float)$row->poor;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->jenis_kemampuan }}</td>
                <td>{{ number_format($row->very_good, 2) }}%</td>
                <td>{{ number_format($row->good, 2) }}%</td>
                <td>{{ number_format($row->fair, 2) }}%</td>
                <td>{{ number_format($row->poor, 2) }}%</td>
                <td class="text-left">{{ $row->follow_up_plan }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Jumlah</td>
                <td>{{ number_format($totals['vg'], 2) }}%</td>
                <td>{{ number_format($totals['g'], 2) }}%</td>
                <td>{{ number_format($totals['f'], 2) }}%</td>
                <td>{{ number_format($totals['p'], 2) }}%</td>
                <td>-</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>