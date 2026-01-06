<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Tabel 2.A.1 Data Mahasiswa
        </x-slot>

        {{-- WRAPPER: horizontal scroll & gaya mirip tabel Filament --}}
        <div class="fi-ta overflow-x-auto w-full">
            <table
                class="fi-ta-table min-w-[1700px] border border-gray-200 text-xs text-gray-800 dark:border-gray-700 dark:text-gray-100"
            >
                {{-- ================= HEADER ================= --}}
                <thead class="sticky top-0 bg-white dark:bg-gray-900 z-10">
                    {{-- BARIS 1 --}}
                    <tr class="bg-gray-100/80 dark:bg-gray-800 font-semibold">
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" rowspan="3">
                            TS
                        </th>
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" rowspan="3">
                            Daya<br>Tampung
                        </th>

                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" colspan="3">
                            Jumlah Calon Mahasiswa
                        </th>
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" colspan="6">
                            Jumlah Mahasiswa Baru
                        </th>
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" colspan="6">
                            Jumlah Mahasiswa Aktif
                        </th>
                        {{-- Tambahan Kolom Aksi --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" rowspan="3">
                            Aksi
                        </th>
                    </tr>

                    {{-- BARIS 2 --}}
                    <tr class="bg-gray-100/80 dark:bg-gray-800 text-[11px] leading-tight">
                        {{-- Calon Mahasiswa --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" rowspan="2">
                            Pendaftar
                        </th>
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" rowspan="2">
                            Pendaftar<br>Afirmasi
                        </th>
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" rowspan="2">
                            Pendaftar<br>Keb. Khusus
                        </th>

                        {{-- Mhs Baru --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" colspan="3">
                            Reguler
                        </th>
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" colspan="3">
                            RPL
                        </th>

                        {{-- Mhs Aktif --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" colspan="3">
                            Reguler
                        </th>
                        <th class="border border-gray-200 dark:border-gray-700 p-2 text-center align-middle" colspan="3">
                            RPL
                        </th>
                    </tr>

                    {{-- BARIS 3 --}}
                    <tr class="bg-gray-100/80 dark:bg-gray-800 text-[11px] leading-tight">
                        {{-- Mhs Baru - Reguler --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Diterima</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Afirmasi</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Keb. Khusus</th>

                        {{-- Mhs Baru - RPL --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Diterima</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Afirmasi</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Keb. Khusus</th>

                        {{-- Mhs Aktif - Reguler --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Diterima</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Afirmasi</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Keb. Khusus</th>

                        {{-- Mhs Aktif - RPL --}}
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Diterima</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Afirmasi</th>
                        <th class="border border-gray-200 dark:border-gray-700 p-1 text-center">Keb. Khusus</th>
                    </tr>
                </thead>

                {{-- ================= BODY ================= --}}
                <tbody>
                    @foreach ($records as $row)
                        <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->ts_label }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->capacity }}
                            </td>

                            {{-- Calon Mahasiswa --}}
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->applicants_total }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->applicants_affirmation }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->applicants_special_needs }}
                            </td>

                            {{-- Mhs Baru - Reguler --}}
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->new_regular_accepted }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->new_regular_affirmation }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->new_regular_special_needs }}
                            </td>

                            {{-- Mhs Baru - RPL --}}
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->new_rpl_accepted }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->new_rpl_affirmation }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->new_rpl_special_needs }}
                            </td>

                            {{-- Mhs Aktif - Reguler --}}
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->active_regular_accepted }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->active_regular_affirmation }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->active_regular_special_needs }}
                            </td>

                            {{-- Mhs Aktif - RPL --}}
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->active_rpl_accepted }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->active_rpl_affirmation }}
                            </td>
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                {{ $row->active_rpl_special_needs }}
                            </td>

                            {{-- TOMBOL EDIT --}}
                            <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                                <x-filament::icon-button
                                    icon="heroicon-m-pencil-square"
                                    color="info"
                                    tag="a"
                                    label="Edit"
                                    href="{{ \App\Filament\Resources\DataMahasiswas\DataMahasiswaResource::getUrl('edit', ['record' => $row]) }}"
                                />
                            </td>
                        </tr>
                    @endforeach

                    {{-- BARIS JUMLAH --}}
                    <tr class="bg-gray-100 dark:bg-gray-900 font-semibold">
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            Jumlah
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['capacity'] }}
                        </td>

                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['applicants_total'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['applicants_affirmation'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['applicants_special_needs'] }}
                        </td>

                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['new_regular_accepted'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['new_regular_affirmation'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['new_regular_special_needs'] }}
                        </td>

                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['new_rpl_accepted'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['new_rpl_affirmation'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['new_rpl_special_needs'] }}
                        </td>

                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['active_regular_accepted'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['active_regular_affirmation'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['active_regular_special_needs'] }}
                        </td>

                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['active_rpl_accepted'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['active_rpl_affirmation'] }}
                        </td>
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center">
                            {{ $totals['active_rpl_special_needs'] }}
                        </td>

                        {{-- Kosongkan kolom aksi pada baris Jumlah --}}
                        <td class="border border-gray-200 dark:border-gray-700 p-1 text-center"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-filament::section>
</x-filament-panels::page>