<?php

namespace App\Filament\Resources\Fundings\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Summarizers\Sum;

class FundingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sumber_pendanaan')
                    ->label('Sumber Pendanaan')
                    ->wrap()
                    ->searchable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->wrap()
                    ->searchable(),

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
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat PDF' : '-')
                    ->url(fn ($state) => $state ? asset('storage/' . ltrim($state, '/')) : null)
                    ->openUrlInNewTab(),
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