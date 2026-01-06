<?php

namespace App\Filament\Resources\KeberagamanAsalMahasiswas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class KeberagamanAsalMahasiswasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategori_label')
                ->label('Kategori'),

            TextColumn::make('nama_asal')
                ->label('Asal Mahasiswa')
                ->searchable(),

            TextColumn::make('ts_2')
                ->label('TS-2'),

            TextColumn::make('ts_1')
                ->label('TS-1'),

            TextColumn::make('ts')
                ->label('TS'),

            TextColumn::make('total')
                ->label('TOTAL')
                ->state(fn ($record) => $record->total),

            TextColumn::make('link_bukti')
                ->label('Link Bukti')
                ->url(fn ($record) => $record->link_bukti)
                ->openUrlInNewTab()
                ->placeholder('-'),
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
