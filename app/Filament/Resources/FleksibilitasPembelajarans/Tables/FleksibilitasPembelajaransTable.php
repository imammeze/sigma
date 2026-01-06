<?php

namespace App\Filament\Resources\FleksibilitasPembelajarans\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\Summarizers\Summarizer;

class FleksibilitasPembelajaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('rowIndex')
                ->label('No')
                ->rowIndex(),

            TextColumn::make('item_label')
                ->label('Tahun Akademik / Bentuk Pembelajaran')
                ->wrap(),

            ColumnGroup::make('Tahun Akademik')
                ->columns([
                    TextColumn::make('ts_2')
                        ->label('TS-2')
                        ->summarize(
                            Summarizer::make()
                                ->label('Jumlah')
                                ->using(function ($query) {
                                    return $query
                                        ->where('item_label', '!=', 'Jumlah Mahasiswa Aktif')
                                        ->sum('ts_2');
                                })
                    ),
                    TextColumn::make('ts_1')
                        ->label('TS-1')
                        ->summarize(
                             Summarizer::make()
                                ->label('Jumlah')
                                ->using(function ($query) {
                                    return $query
                                        ->where('item_label', '!=', 'Jumlah Mahasiswa Aktif')
                                        ->sum('ts_1');
                                })
                    ),
                    TextColumn::make('ts')
                        ->label('TS')
                        ->summarize(
                            Summarizer::make()
                            ->label('Jumlah')
                            ->using(function ($query) {
                                return $query
                                    ->where('item_label', '!=', 'Jumlah Mahasiswa Aktif')
                                    ->sum('ts');
                            })
                    ),
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
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}