<?php

namespace App\Filament\Resources\KerjasamaPenelitians\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;

class KerjasamaPenelitiansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_kerjasama')->label('Judul')->wrap()->searchable()->sortable(),
                TextColumn::make('mitra_kerjasama')->label('Mitra')->wrap()->searchable(),
                TextColumn::make('sumber')->label('Sumber')->badge()->sortable(),
                TextColumn::make('durasi')->label('Durasi')->alignCenter(),

                TextColumn::make('ts_2')
                    ->label('TS-2')
                    ->money('IDR', locale: 'id')
                    ->alignRight()
                    ->sortable(),
                TextColumn::make('ts_1')
                    ->label('TS-1')
                    ->money('IDR', locale: 'id')
                    ->alignRight()
                    ->sortable(),
                TextColumn::make('ts')
                    ->label('TS')
                    ->money('IDR', locale: 'id')
                    ->alignRight()
                    ->sortable(),

                TextColumn::make('bukti_files')
                    ->label('Bukti')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat Dokumen' : '-')
                    ->url(fn ($state) => $state ? asset('storage/'.ltrim($state, '/')) : null)
                    ->openUrlInNewTab(),
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