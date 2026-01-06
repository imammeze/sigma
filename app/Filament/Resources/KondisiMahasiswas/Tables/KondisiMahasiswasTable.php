<?php

namespace App\Filament\Resources\KondisiMahasiswas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Summarizers\Sum;

class KondisiMahasiswasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategori')->label('Kategori')->wrap()->sortable()->searchable(),

                TextColumn::make('ts_2')->label('TS-2')->alignRight()
                    ->summarize(Sum::make()->label('Total TS-2')),

                TextColumn::make('ts_1')->label('TS-1')->alignRight()
                    ->summarize(Sum::make()->label('Total TS-1')),

                TextColumn::make('ts')->label('TS')->alignRight()
                    ->summarize(Sum::make()->label('Total TS')),

                TextColumn::make('jumlah')->label('Jumlah')->alignRight()
                    ->summarize(Sum::make()->label('Total Jumlah')),
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