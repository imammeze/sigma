<?php

namespace App\Filament\Resources\VisiMisis\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class VisiMisisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),
                
                TextColumn::make('visi')
                    ->label('Visi')
                    ->limit(120)
                    ->wrap()
                    ->searchable(),

                TextColumn::make('misi')
                    ->label('Misi')
                    ->formatStateUsing(fn ($state) => $state ? str(strip_tags($state))->limit(120) : '-')
                    ->wrap()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}