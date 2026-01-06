<?php

namespace App\Filament\Resources\PerolehanPkms\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PerolehanPkmsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->label('Judul')->wrap()->searchable()->sortable(),
                TextColumn::make('jenis_hki')->label('Jenis HKI')->searchable(),
                TextColumn::make('nama_dtpr')->label('Nama DTPR')->searchable(),
                TextColumn::make('tahun_perolehan')->label('Tahun')->badge()->sortable(),

                TextColumn::make('bukti_dokumen')
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