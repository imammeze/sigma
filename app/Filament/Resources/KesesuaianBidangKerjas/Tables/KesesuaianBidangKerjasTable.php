<?php

namespace App\Filament\Resources\KesesuaianBidangKerjas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Summarizers\Sum;

class KesesuaianBidangKerjasTable
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
                    ->summarize(Sum::make()->label('Jumlah')),

                TextColumn::make('tracked_graduates')
                    ->label('Jumlah Lulusan yang Terlacak')
                    ->sortable()
                    ->summarize(Sum::make()->label('Jumlah')),

                TextColumn::make('job_infokom')
                    ->label('Profesi Kerja Bidang Infokom')
                    ->sortable()
                    ->summarize(Sum::make()->label('Jumlah')),

                TextColumn::make('job_non_infokom')
                    ->label('Profesi Kerja Bidang Non Infokom')
                    ->sortable()
                    ->summarize(Sum::make()->label('Jumlah')),

                TextColumn::make('scope_multinational')
                    ->label('Multinasional / Internasional')
                    ->sortable()
                    ->summarize(Sum::make()->label('Jumlah')),

                TextColumn::make('scope_national')
                    ->label('Nasional')
                    ->sortable()
                    ->summarize(Sum::make()->label('Jumlah')),

                TextColumn::make('scope_entrepreneur')
                    ->label('Wirausaha')
                    ->sortable()
                    ->summarize(Sum::make()->label('Jumlah')),
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