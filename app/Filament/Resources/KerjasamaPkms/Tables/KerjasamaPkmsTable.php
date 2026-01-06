<?php

namespace App\Filament\Resources\KerjasamaPkms\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;

class KerjasamaPkmsTable
{
    public static function configure(Table $table): Table
    {   
        return $table
            ->columns([
                TextColumn::make('judul_kerjasama')->label('Judul')->wrap()->searchable()->sortable(),
                TextColumn::make('mitra_kerjasama')->label('Mitra')->wrap()->searchable(),
                TextColumn::make('nama_dosen')->label('Nama Dosen')->searchable(),
                TextColumn::make('sumber')->label('Sumber')->badge()->sortable(),
                TextColumn::make('durasi')->label('Durasi')->alignCenter(),

                ColumnGroup::make('Pendanaan (Rp juta)', [
                    TextColumn::make('ts_2')
                        ->label('TS-2')
                        ->money('IDR', locale: 'id')
                        ->alignCenter(),
                    TextColumn::make('ts_1')
                        ->label('TS-1')
                        ->money('IDR', locale: 'id')
                        ->alignCenter(),
                    TextColumn::make('ts')
                        ->label('TS')
                        ->money('IDR', locale: 'id')
                        ->alignCenter(),
                ]),
                
                TextColumn::make('status')->label('Status')->wrap(),

                TextColumn::make('bukti')
                    ->label('Bukti')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat Dokumen' : '-')
                    ->url(fn ($state) => $state ? asset('storage/' . ltrim($state, '/')) : null)
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