<?php

namespace App\Filament\Resources\PetaPemenuhanCpls\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;

class PetaPemenuhanCplsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cpl')
                    ->label('CPL')
                    ->badge()
                    ->sortable(),

                TextColumn::make('cpmk_label')
                    ->label('CPMK')
                    ->wrap(),

                ColumnGroup::make('Semester', [
                    TextColumn::make('semester1Course.mata_kuliah')->label('S1')->wrap(),
                    TextColumn::make('semester2Course.mata_kuliah')->label('S2')->wrap(),
                    TextColumn::make('semester3Course.mata_kuliah')->label('S3')->wrap(),
                    TextColumn::make('semester4Course.mata_kuliah')->label('S4')->wrap(),
                    TextColumn::make('semester5Course.mata_kuliah')->label('S5')->wrap(),
                    TextColumn::make('semester6Course.mata_kuliah')->label('S6')->wrap(),
                    TextColumn::make('semester7Course.mata_kuliah')->label('S7')->wrap(),
                    TextColumn::make('semester8Course.mata_kuliah')->label('S8')->wrap(),
                ]),
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