<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: center; }
        .bg-gray { background-color: #f3f4f6; font-weight: bold; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Tabel 2.A.1 Data Mahasiswa</h2>
    <table>
        <thead>
            <tr class="bg-gray">
                <th rowspan="3">TS</th>
                <th rowspan="3">Daya Tampung</th>
                <th colspan="3">Jumlah Calon Mahasiswa</th>
                <th colspan="6">Jumlah Mahasiswa Baru</th>
                <th colspan="6">Jumlah Mahasiswa Aktif</th>
            </tr>
            <tr class="bg-gray">
                <th rowspan="2">Pendaftar</th>
                <th rowspan="2">Afirmasi</th>
                <th rowspan="2">Keb. Khusus</th>
                <th colspan="3">Reguler</th>
                <th colspan="3">RPL</th>
                <th colspan="3">Reguler</th>
                <th colspan="3">RPL</th>
            </tr>
            <tr class="bg-gray">
                @for ($i = 0; $i < 4; $i++)
                    <th>Diterima</th><th>Afirmasi</th><th>Khusus</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            @foreach($records as $row)
            <tr>
                <td>{{ $row->ts_label }}</td>
                <td>{{ $row->capacity }}</td>
                <td>{{ $row->applicants_total }}</td>
                <td>{{ $row->applicants_affirmation }}</td>
                <td>{{ $row->applicants_special_needs }}</td>
                <td>{{ $row->new_regular_accepted }}</td>
                <td>{{ $row->new_regular_affirmation }}</td>
                <td>{{ $row->new_regular_special_needs }}</td>
                <td>{{ $row->new_rpl_accepted }}</td>
                <td>{{ $row->new_rpl_affirmation }}</td>
                <td>{{ $row->new_rpl_special_needs }}</td>
                <td>{{ $row->active_regular_accepted }}</td>
                <td>{{ $row->active_regular_affirmation }}</td>
                <td>{{ $row->active_regular_special_needs }}</td>
                <td>{{ $row->active_rpl_accepted }}</td>
                <td>{{ $row->active_rpl_affirmation }}</td>
                <td>{{ $row->active_rpl_special_needs }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray">
                <td>Jumlah</td>
                @foreach($totals as $total) <td>{{ $total }}</td> @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>