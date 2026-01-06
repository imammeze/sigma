<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: center; vertical-align: top; }
        .header { background-color: #f3f4f6; font-weight: bold; }
        .text-left { text-align: left; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">TABEL UNIT SISTEM PENJAMINAN MUTU INTERNAL (SPMI)</h2>
    <table>
        <thead>
            <tr class="header">
                <th rowspan="2">No</th>
                <th rowspan="2">Unit SPMI</th>
                <th rowspan="2">Nama Unit SPMI</th>
                <th rowspan="2">Dokumen SPMI (Link)</th>
                <th colspan="4">Auditor / Frekuensi</th>
                <th rowspan="2">Bukti Certified Auditor</th>
                <th rowspan="2">Laporan Audit</th>
            </tr>
            <tr class="header">
                <th>Jumlah</th>
                <th>Certified</th>
                <th>Non</th>
                <th>Audit/Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $key => $row)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->jenis_unit_spmi }}</td>
                <td class="text-left">{{ $row->nama_unit_spmi }}</td>
                <td class="text-left">
                    {{-- Mengubah string URL dipisahkan koma/newline menjadi baris baru --}}
                    {!! str_replace([' ,', ',', "\n"], '<br>', e($row->dokumen_spmi)) !!}
                </td>
                <td>{{ $row->jumlah_auditor }}</td>
                <td>{{ $row->certified }}</td>
                <td>{{ $row->non_certified }}</td>
                <td>{{ $row->frekuensi_audit }}</td>
                <td class="text-left">
                    {!! str_replace([' ,', ',', "\n"], '<br>', e($row->bukti_certified_auditor)) !!}
                </td>
                <td class="text-left">
                    {!! str_replace([' ,', ',', "\n"], '<br>', e($row->laporan_audit)) !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>