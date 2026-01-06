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
    <div class="title">TABEL ISI PEMBELAJARAN (KURIKULUM)</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 30px;">No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Profil Lulusan</th>
            </tr>
        </thead>
        <tbody>
            @php $totalSks = 0; @endphp
            @foreach($records as $key => $row)
            @php $totalSks += (int)$row->sks; @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-left">{{ $row->mata_kuliah }}</td>
                <td>{{ $row->sks }}</td>
                <td>{{ $row->semester }}</td>
                <td>{{ $row->profil_lulusan }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td colspan="2">Total SKS</td>
                <td>{{ $totalSks }}</td>
                <td colspan="2"></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>