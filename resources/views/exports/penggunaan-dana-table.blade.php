<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 10px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        .header { background-color: #f3f4f6; font-weight: bold; text-align: center; }
        .category-row { background-color: #e5e7eb; font-weight: bold; }
        .money { text-align: right; }
        .title { text-align: center; font-size: 14px; margin-bottom: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="title">LAPORAN PENGGUNAAN DANA</div>
    <table>
        <thead>
            <tr class="header">
                <th>Penggunaan Dana</th>
                <th>TS-2 (Rp)</th>
                <th>TS-1 (Rp)</th>
                <th>TS (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @php
                $grandTotalTs2 = 0;
                $grandTotalTs1 = 0;
                $grandTotalTs = 0;
                // Mengelompokkan data berdasarkan kategori
                $groupedRecords = $records->groupBy('category');
                
                $categoryLabels = [
                    'operasional'    => 'Operasional Pendidikan',
                    'penelitian_pkm' => 'Penelitian & PKM',
                    'investasi'      => 'Investasi',
                ];
            @endphp

            @foreach($groupedRecords as $category => $items)
                <tr class="category-row">
                    <td colspan="4">{{ $categoryLabels[$category] ?? ucfirst($category) }}</td>
                </tr>
                @foreach($items as $row)
                    @php
                        $grandTotalTs2 += $row->ts_2;
                        $grandTotalTs1 += $row->ts_1;
                        $grandTotalTs += $row->ts;
                    @endphp
                    <tr>
                        <td>{{ $row->penggunaan_dana }}</td>
                        <td class="money">{{ number_format($row->ts_2, 0, ',', '.') }}</td>
                        <td class="money">{{ number_format($row->ts_1, 0, ',', '.') }}</td>
                        <td class="money">{{ number_format($row->ts, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
        <tfoot>
            <tr class="header">
                <td>TOTAL</td>
                <td class="money">{{ number_format($grandTotalTs2, 0, ',', '.') }}</td>
                <td class="money">{{ number_format($grandTotalTs1, 0, ',', '.') }}</td>
                <td class="money">{{ number_format($grandTotalTs, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>