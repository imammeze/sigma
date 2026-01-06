<?php

namespace App\Filament\Resources\PembiayaanPkms\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PembiayaanPkmsTable
{
    public static function configure(Table $table): Table
    {   
        return $table
            ->columns([
                TextColumn::make('nama_dtpr')->label('Nama DTPR')->searchable()->sortable(),
                TextColumn::make('judul_pkm')->label('Judul PKM')->wrap()->searchable(),
                TextColumn::make('jumlah_mahasiswa')->label('Mhs')->alignCenter(),
                TextColumn::make('jenis_hibah_pkm')->label('Jenis Hibah'),
                TextColumn::make('sumber_dana')->label('Sumber')->badge()->sortable(),
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

                TextColumn::make('bukti_pdf')
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