<?php

namespace App\Filament\Resources\RerataBebanDtprs\Tables;

use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class RerataBebanDtprsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_dtpr')->label('Nama DTPR')->sortable()->searchable(),
                TextColumn::make('sks_ps_sendiri')->label('PS Sendiri')->alignCenter(),
                TextColumn::make('sks_ps_lain_pt_sendiri')->label('PS Lain, PT Sendiri')->alignCenter(),
                TextColumn::make('sks_pt_lain')->label('PT Lain')->alignCenter(),
                TextColumn::make('sks_penelitian')->label('Penelitian')->alignCenter(),
                TextColumn::make('sks_pengabdian')->label('Pengabdian')->alignCenter(),
                TextColumn::make('sks_manajemen_pt_sendiri')->label('Manajemen PT Sendiri')->alignCenter(),
                TextColumn::make('sks_manajemen_pt_lain')->label('Manajemen PT Lain')->alignCenter(),
                TextColumn::make('total_sks')->label('Total SKS')->sortable()->alignCenter(),

                TextColumn::make('evidence')
                    ->label('Evidence')
                    ->url(fn ($record) => $record->evidence, true)
                    ->openUrlInNewTab(),

                TextColumn::make('hki')->label('HKI'),
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