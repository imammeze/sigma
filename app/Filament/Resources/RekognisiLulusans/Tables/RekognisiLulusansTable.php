<?php

namespace App\Filament\Resources\RekognisiLulusans\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use App\Models\RerataMasaTungguLulus;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\Summarizers\Summarizer;

class RekognisiLulusansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('rowIndex')
                    ->label('No')
                    ->rowIndex(),

                TextColumn::make('recognition_source')
                    ->label('Sumber Rekognisi')
                    ->wrap(),

                TextColumn::make('recognition_type')
                    ->label('Jenis Pengakuan Lulusan (Rekognisi)')
                    ->wrap(),

                // Grup Tahun Akademik: TS-3, TS-2, TS-1
                ColumnGroup::make('Tahun Akademik')
                    ->columns([
                        // ===== TS-3 =====
                        TextColumn::make('ts_3')
                            ->label('TS-3')
                            ->summarize([
                                // 1) Jumlah Rekognisi (SUM kolom ts_3)
                                Sum::make()
                                    ->label('Jumlah Rekognisi'),

                                // 2) Jumlah Lulusan (ambil dari tabel 2.B.4 / RerataMasaTungguLulus)
                                Summarizer::make()
                                    ->label('Jumlah Lulusan')
                                    ->using(function () {
                                        return RerataMasaTungguLulus::where('graduation_year_label', 'TS-3')
                                            ->sum('total_graduates');
                                    }),

                                // 3) Persentase = Jumlah Rekognisi / Jumlah Lulusan * 100
                                Summarizer::make()
                                    ->label('Persentase')
                                    ->using(function ($query) {
                                        $recognitions = (clone $query)->sum('ts_3');

                                        $graduates = RerataMasaTungguLulus::where('graduation_year_label', 'TS-3')
                                            ->sum('total_graduates');

                                        if ($graduates <= 0) {
                                            return null;
                                        }

                                        return round(($recognitions / $graduates) * 100, 2);
                                    })
                                    ->formatStateUsing(
                                        fn ($state) => $state !== null
                                            ? number_format($state, 2) . '%'
                                            : '-'
                                    ),
                            ]),

                        // ===== TS-2 =====
                        TextColumn::make('ts_2')
                            ->label('TS-2')
                            ->summarize([
                                Sum::make()
                                    ->label('Jumlah Rekognisi'),

                                Summarizer::make()
                                    ->label('Jumlah Lulusan')
                                    ->using(function () {
                                        return RerataMasaTungguLulus::where('graduation_year_label', 'TS-2')
                                            ->sum('total_graduates');
                                    }),

                                Summarizer::make()
                                    ->label('Persentase')
                                    ->using(function ($query) {
                                        $recognitions = (clone $query)->sum('ts_2');

                                        $graduates = RerataMasaTungguLulus::where('graduation_year_label', 'TS-2')
                                            ->sum('total_graduates');

                                        if ($graduates <= 0) {
                                            return null;
                                        }

                                        return round(($recognitions / $graduates) * 100, 2);
                                    })
                                    ->formatStateUsing(
                                        fn ($state) => $state !== null
                                            ? number_format($state, 2) . '%'
                                            : '-'
                                    ),
                            ]),

                        // ===== TS-1 =====
                        TextColumn::make('ts_1')
                            ->label('TS-1')
                            ->summarize([
                                Sum::make()
                                    ->label('Jumlah Rekognisi'),

                                Summarizer::make()
                                    ->label('Jumlah Lulusan')
                                    ->using(function () {
                                        return RerataMasaTungguLulus::where('graduation_year_label', 'TS-1')
                                            ->sum('total_graduates');
                                    }),

                                Summarizer::make()
                                    ->label('Persentase')
                                    ->using(function ($query) {
                                        $recognitions = (clone $query)->sum('ts_1');

                                        $graduates = RerataMasaTungguLulus::where('graduation_year_label', 'TS-1')
                                            ->sum('total_graduates');

                                        if ($graduates <= 0) {
                                            return null;
                                        }

                                        return round(($recognitions / $graduates) * 100, 2);
                                    })
                                    ->formatStateUsing(
                                        fn ($state) => $state !== null
                                            ? number_format($state, 2) . '%'
                                            : '-'
                                    ),
                            ]),
                    ]),

                TextColumn::make('evidence_link')
                    ->label('Link Bukti')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat Bukti' : '-')
                    ->url(fn ($state) => $state, shouldOpenInNewTab: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}