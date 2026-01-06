<table>
    <thead>
        <tr>
            <th colspan="6" style="font-size: 14px; font-weight: bold; text-align: center; height: 30px; vertical-align: middle;">
                RATA-RATA WAKTU TUNGGU LULUSAN
            </th>
        </tr>
        <tr style="background-color: #f3f4f6; font-weight: bold; text-align: center; border: 1px solid #000;">
            <th style="width: 5px; border: 1px solid #000;">No</th>
            <th style="width: 20px; border: 1px solid #000;">Tahun Lulus</th>
            <th style="width: 20px; border: 1px solid #000;">Jumlah Lulusan</th>
            <th style="width: 25px; border: 1px solid #000;">Jumlah Lulusan Terlacak</th>
            <th style="width: 30px; border: 1px solid #000;">Rata-rata Waktu Tunggu (Bulan)</th>
            <th style="width: 20px; border: 1px solid #000;">Response Rate (%)</th>
        </tr>
    </thead>
    <tbody>
        @php 
            $sumTotal = 0; 
            $sumTracked = 0; 
            $sumAvgTime = 0;
            $count = $records->count();
        @endphp

        @foreach($records as $key => $row)
            @php
                $sumTotal += (int)($row->total_graduates ?? 0);
                $sumTracked += (int)($row->tracked_graduates ?? 0);
                $sumAvgTime += (float)($row->avg_waiting_time ?? 0);
            @endphp
            <tr>
                <td style="border: 1px solid #000; text-align: center;">{{ $key + 1 }}</td>
                <td style="border: 1px solid #000; text-align: center;">{{ $row->graduation_year_label }}</td>
                <td style="border: 1px solid #000; text-align: center;">{{ $row->total_graduates }}</td>
                <td style="border: 1px solid #000; text-align: center;">{{ $row->tracked_graduates }}</td>
                <td style="border: 1px solid #000; text-align: center;">{{ number_format($row->avg_waiting_time, 2) }}</td>
                <td style="border: 1px solid #000; text-align: center;">{{ number_format($row->response_rate, 2) }}%</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr style="background-color: #f3f4f6; font-weight: bold; text-align: center;">
            <td colspan="2" style="border: 1px solid #000;">Total / Rata-rata</td>
            <td style="border: 1px solid #000;">{{ $sumTotal }}</td>
            <td style="border: 1px solid #000;">{{ $sumTracked }}</td>
            <td style="border: 1px solid #000;">{{ $count > 0 ? number_format($sumAvgTime / $count, 2) : 0 }}</td>
            <td style="border: 1px solid #000;">
                @php
                    $totalResponseRate = $sumTotal > 0 ? ($sumTracked / $sumTotal) * 100 : 0;
                @endphp
                {{ number_format($totalResponseRate, 2) }}%
            </td>
        </tr>
    </tfoot>
</table>