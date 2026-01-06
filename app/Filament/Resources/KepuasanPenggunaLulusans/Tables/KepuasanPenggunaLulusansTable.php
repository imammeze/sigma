<?php

namespace App\Filament\Resources\KepuasanPenggunaLulusans\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Summarizers\Sum;

class KepuasanPenggunaLulusansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('rowIndex')
                ->label('No')
                ->rowIndex(),

            // Jenis kemampuan
            TextColumn::make('jenis_kemampuan')
                ->label('Jenis Kemampuan')
                ->wrap(),

            // Grup: Tingkat Kepuasan Pengguna
            ColumnGroup::make('Tingkat Kepuasan Pengguna (%)')
                ->columns([
                    TextColumn::make('very_good')
                        ->label('Sangat Baik')
                        ->numeric(decimalPlaces: 2)
                        ->summarize(
                            Sum::make()
                                ->label('Jumlah')
                                ->formatStateUsing(fn ($state) => $state !== null
                                ? number_format($state, 2) . '%'
                                : '-')
                        ),

                    TextColumn::make('good')
                        ->label('Baik')
                        ->numeric(decimalPlaces: 2)
                        ->summarize(
                            Sum::make()
                                ->label('Jumlah')
                                ->formatStateUsing(fn ($state) => $state !== null
                                ? number_format($state, 2) . '%'
                                : '-')
                        ),

                    TextColumn::make('fair')
                        ->label('Cukup')
                        ->numeric(decimalPlaces: 2)
                        ->summarize(
                            Sum::make()
                                ->label('Jumlah')
                                ->formatStateUsing(fn ($state) => $state !== null
                                ? number_format($state, 2) . '%'
                                : '-')
                        ),

                    TextColumn::make('poor')
                        ->label('Kurang')
                        ->numeric(decimalPlaces: 2)
                        ->summarize(
                            Sum::make()
                                ->label('Jumlah')
                                ->formatStateUsing(fn ($state) => $state !== null
                                ? number_format($state, 2) . '%'
                                : '-')
                        ),
                ])
                ->alignCenter()
                ->wrapHeader(),

            TextColumn::make('follow_up_plan')
                ->label('Rencana Tindak Lanjut')
                ->wrap()
                ->limit(80),
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