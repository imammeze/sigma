<?php

namespace App\Filament\Resources\DataMahasiswas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Summarizers\Sum;

class DataMahasiswasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('ts_label')
                //     ->label('TS')
                //     ->sortable(),

                // TextColumn::make('capacity')
                //     ->label('Daya Tampung')
                //     ->summarize(Sum::make()->label('Jumlah')),

                // // ===== Jumlah Calon Mahasiswa =====
                // ColumnGroup::make('Jumlah Calon Mahasiswa')
                //     ->columns([
                //         TextColumn::make('applicants_total')
                //             ->label('Pendaftar')
                //             ->summarize(Sum::make()->label('Jumlah')),

                //         TextColumn::make('applicants_affirmation')
                //             ->label('Pendaftar Afirmasi')
                //             ->summarize(Sum::make()->label('Jumlah')),

                //         TextColumn::make('applicants_special_needs')
                //             ->label('Pendaftar Keb. Khusus')
                //             ->summarize(Sum::make()->label('Jumlah')),

                //         TextColumn::make('applicants_accepted')
                //             ->label('Diterima')
                //             ->summarize(Sum::make()->label('Jumlah')),
                //     ]),

                // // ===== Jumlah Mahasiswa Baru =====
                // ColumnGroup::make('Jumlah Mahasiswa Baru')
                //     ->columns([
                //         ColumnGroup::make('Reguler')
                //             ->columns([
                //                 TextColumn::make('new_regular_accepted')
                //                     ->label('Diterima')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('new_regular_affirmation')
                //                     ->label('Afirmasi')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('new_regular_special_needs')
                //                     ->label('Keb. Khusus')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //             ]),

                //         ColumnGroup::make('RPL')
                //             ->columns([
                //                 TextColumn::make('new_rpl_accepted')
                //                     ->label('Diterima')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('new_rpl_affirmation')
                //                     ->label('Afirmasi')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('new_rpl_special_needs')
                //                     ->label('Keb. Khusus')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //             ]),
                //     ]),

                // // ===== Jumlah Mahasiswa Aktif =====
                // ColumnGroup::make('Jumlah Mahasiswa Aktif')
                //     ->columns([
                //         ColumnGroup::make('Reguler')
                //             ->columns([
                //                 TextColumn::make('active_regular_accepted')
                //                     ->label('Diterima')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('active_regular_affirmation')
                //                     ->label('Afirmasi')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('active_regular_special_needs')
                //                     ->label('Keb. Khusus')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //             ]),

                //         ColumnGroup::make('RPL')
                //             ->columns([
                //                 TextColumn::make('active_rpl_accepted')
                //                     ->label('Diterima')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('active_rpl_affirmation')
                //                     ->label('Afirmasi')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                //                 TextColumn::make('active_rpl_special_needs')
                //                     ->label('Keb. Khusus')
                //                     ->summarize(Sum::make()->label('Jumlah')),
                            // ]),
                    // ]),
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