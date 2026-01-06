<?php

namespace App\Filament\Resources\RerataMasaTungguLuluses\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Summarizers\Sum;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Columns\Summarizers\Average;
use Filament\Tables\Columns\Summarizers\Summarizer;
use Illuminate\Database\Eloquent\Builder;

class RerataMasaTungguLulusesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('graduation_year_label')
                    ->label('Tahun Lulus')
                    ->sortable(),

                TextColumn::make('total_graduates')
                    ->label('Jumlah Lulusan')
                    ->sortable()
                    ->summarize(Sum::make()),

                TextColumn::make('tracked_graduates')
                    ->label('Jumlah Lulusan yang Terlacak')
                    ->sortable()
                    ->summarize(Sum::make()),

                TextColumn::make('avg_waiting_time')
                    ->label('Rata-rata Waktu Tunggu (Bulan)')
                    ->sortable()
                    ->summarize(
                    Average::make()
                        ->label('Rata-rata')
                        ->formatStateUsing(fn ($state) => number_format($state, 2) . ' bulan')
                ),

                TextColumn::make('response_rate')
                    ->label('Response Rate (%)')
                    ->sortable()
                    ->summarize(
                        Summarizer::make()
                            ->label('Response Rate Total')
                            ->using(function ($query) {
                                $totalQuery   = clone $query;
                                $trackedQuery = clone $query;

                                $total   = $totalQuery->sum('total_graduates');     
                                $tracked = $trackedQuery->sum('tracked_graduates');

                                if ($total <= 0) {
                                    return null;
                                }

                                return round(($tracked / $total) * 100, 2); 
                            })
                            ->formatStateUsing(fn ($state) => $state !== null
                                ? number_format($state, 2) . '%'
                                : '-'
                        )),
            ])
            ->defaultSort('graduation_year_label')
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