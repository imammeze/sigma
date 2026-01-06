<?php

namespace App\Filament\Resources\PenggunaanDanas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Tables\Grouping\Group;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Summarizers\Sum;

class PenggunaanDanasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('penggunaan_dana')
                    ->label('Penggunaan Dana')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('ts_2')
                    ->label('TS-2')
                    ->alignRight()
                    ->formatStateUsing(fn ($state) => $state !== null ? number_format((int) $state, 0, ',', '.') : '')
                    ->prefix('Rp ')
                    ->sortable()
                    ->summarize([
                        Sum::make()
                            ->label('Total TS-2')
                            ->formatStateUsing(fn ($state) => $state !== null ? 'Rp ' . number_format((int) $state, 0, ',', '.') : ''),
                    ]),

                TextColumn::make('ts_1')
                    ->label('TS-1')
                    ->alignRight()
                    ->formatStateUsing(fn ($state) => $state !== null ? number_format((int) $state, 0, ',', '.') : '')
                    ->prefix('Rp ')
                    ->sortable()
                    ->summarize([
                        Sum::make()
                            ->label('Total TS-1')
                            ->formatStateUsing(fn ($state) => $state !== null ? 'Rp ' . number_format((int) $state, 0, ',', '.') : ''),
                    ]),

                TextColumn::make('ts')
                    ->label('TS')
                    ->alignRight()
                    ->formatStateUsing(fn ($state) => $state !== null ? number_format((int) $state, 0, ',', '.') : '')
                    ->prefix('Rp ')
                    ->sortable()
                    ->summarize([
                        Sum::make()
                            ->label('Total TS')
                            ->formatStateUsing(fn ($state) => $state !== null ? 'Rp ' . number_format((int) $state, 0, ',', '.') : ''),
                    ]),

                TextColumn::make('bukti_pdf')
                    ->label('Bukti')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat PDF' : '-')
                    ->url(fn ($state) => $state ? asset('storage/' . ltrim($state, '/')) : null)
                    ->openUrlInNewTab(),
            ])
            ->groups([
                Group::make('category')
                    ->label('Kategori')
                    ->getTitleFromRecordUsing(function ($record) {
                        $val = $record?->category;
                        return match ($val) {
                            'operasional'    => 'Operasional Pendidikan',
                            'penelitian_pkm' => 'Penelitian & PKM',
                            'investasi'      => 'Investasi',
                            default          => $val ? ucfirst((string) $val) : 'Kategori',
                        };
                    })
                    ->collapsible(),
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