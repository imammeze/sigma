<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 9px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; vertical-align: top; }
        .header { background-color: #f3f4f6; font-weight: bold; text-align: center; }
        .text-center { text-align: center; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">DAFTAR PUBLIKASI ILMIAH DTPR</div>
    <table>
        <thead>
            <tr class="header">
                <th style="width: 30px;">No</th>
                <th>Nama DTPR</th>
                <th>Judul Penelitian</th>
                <th>Jenis Publikasi</th>
                <th style="width: 50px;">Tahun</th>
                <th>Link Bukti</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $key => $row)
            <tr>
                <td class="text-center">{{ $key + 1 }}</td>
                <td>{{ $row->nama_dtpr }}</td>
                <td>{{ $row->judul_penelitian }}</td>
                <td>{{ $row->jenis_publikasi }}</td>
                <td class="text-center">{{ $row->tahun_terbit }}</td>
                <td>
                    {{-- Mengolah string link bukti (newline/comma) menjadi baris baru --}}
                    @if($row->link_bukti)
                        @foreach(preg_split('/[\r\n,]+/', trim($row->link_bukti)) as $link)
                            {{ trim($link) }}<br>
                        @endforeach
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>