<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: center; vertical-align: middle; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
        .title { text-align: center; font-size: 12px; margin-bottom: 15px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">TABEL REKOGNISI LULUSAN</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2" style="width: 30px;">No</th>
                <th rowspan="2">Sumber Rekognisi</th>
                <th rowspan="2">Jenis Pengakuan Lulusan (Rekognisi)</th>
                <th colspan="3">Tahun Akademik</th>
                <th rowspan="2">Link Bukti</th>
            </tr>
            <tr class="header">
                <th>TS-3</th>
                <th>TS-2</th>
                <th>TS-1</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $sumTS3 = 0; $sumTS2 = 0; $sumTS1 = 0; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $sumTS3 += (int)$row->ts_3;
                $sumTS2 += (int)$row->ts_2;
                $sumTS1 += (int)$row->ts_1;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->recognition_source }}</td>
                <td class="text-left">{{ $row->recognition_type }}</td>
                <td>{{ $row->ts_3 }}</td>
                <td>{{ $row->ts_2 }}</td>
                <td>{{ $row->ts_1 }}</td>
                <td class="text-left">{{ $row->evidence_link ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            {{-- Baris Jumlah Rekognisi --}}
            <tr class="header">
                <td colspan="3" class="text-left">Jumlah Rekognisi</td>
                <td>{{ $sumTS3 }}</td>
                <td>{{ $sumTS2 }}</td>
                <td>{{ $sumTS1 }}</td>
                <td>-</td>
            </tr>
            {{-- Baris Jumlah Lulusan (Ambil dari Model Lain) --}}
            @php
                $gradTS3 = \App\Models\RerataMasaTungguLulus::where('graduation_year_label', 'TS-3')->sum('total_graduates');
                $gradTS2 = \App\Models\RerataMasaTungguLulus::where('graduation_year_label', 'TS-2')->sum('total_graduates');
                $gradTS1 = \App\Models\RerataMasaTungguLulus::where('graduation_year_label', 'TS-1')->sum('total_graduates');
            @endphp
            <tr class="header">
                <td colspan="3" class="text-left">Jumlah Lulusan</td>
                <td>{{ $gradTS3 }}</td>
                <td>{{ $gradTS2 }}</td>
                <td>{{ $gradTS1 }}</td>
                <td>-</td>
            </tr>
            {{-- Baris Persentase --}}
            <tr class="header">
                <td colspan="3" class="text-left">Persentase</td>
                <td>{{ $gradTS3 > 0 ? round(($sumTS3 / $gradTS3) * 100, 2) : 0 }}%</td>
                <td>{{ $gradTS2 > 0 ? round(($sumTS2 / $gradTS2) * 100, 2) : 0 }}%</td>
                <td>{{ $gradTS1 > 0 ? round(($sumTS1 / $gradTS1) * 100, 2) : 0 }}%</td>
                <td>-</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>