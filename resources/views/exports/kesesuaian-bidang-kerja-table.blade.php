<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: center; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .title { text-align: center; font-size: 12px; margin-bottom: 15px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">KESESUAIAN BIDANG KERJA DAN LINGKUP KERJA LULUSAN</div>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2">No</th>
                <th rowspan="2">Tahun Lulus</th>
                <th rowspan="2">Jml. Lulusan</th>
                <th rowspan="2">Terlacak</th>
                <th colspan="2">Bidang Kerja</th>
                <th colspan="3">Lingkup Kerja</th>
            </tr>
            <tr class="header">
                <th>Infokom</th>
                <th>Non-Infokom</th>
                <th>Multinasional</th>
                <th>Nasional</th>
                <th>Wirausaha</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $totals = [
                    'grad' => 0, 'track' => 0, 'info' => 0, 'non' => 0, 
                    'multi' => 0, 'nas' => 0, 'wira' => 0
                ]; 
            @endphp
            @foreach($records as $key => $row)
            @php
                $totals['grad'] += $row->total_graduates;
                $totals['track'] += $row->tracked_graduates;
                $totals['info'] += $row->job_infokom;
                $totals['non'] += $row->job_non_infokom;
                $totals['multi'] += $row->scope_multinational;
                $totals['nas'] += $row->scope_national;
                $totals['wira'] += $row->scope_entrepreneur;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $row->graduation_year_label }}</td>
                <td>{{ $row->total_graduates }}</td>
                <td>{{ $row->tracked_graduates }}</td>
                <td>{{ $row->job_infokom }}</td>
                <td>{{ $row->job_non_infokom }}</td>
                <td>{{ $row->scope_multinational }}</td>
                <td>{{ $row->scope_national }}</td>
                <td>{{ $row->scope_entrepreneur }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Jumlah Total</td>
                <td>{{ $totals['grad'] }}</td>
                <td>{{ $totals['track'] }}</td>
                <td>{{ $totals['info'] }}</td>
                <td>{{ $totals['non'] }}</td>
                <td>{{ $totals['multi'] }}</td>
                <td>{{ $totals['nas'] }}</td>
                <td>{{ $totals['wira'] }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>