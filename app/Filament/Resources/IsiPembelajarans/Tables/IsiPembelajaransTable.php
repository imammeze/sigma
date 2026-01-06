<?php

namespace App\Filament\Resources\IsiPembelajarans\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class IsiPembelajaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mata_kuliah')->label('Mata Kuliah')->wrap()->sortable(),
                TextColumn::make('sks')->label('SKS')->alignCenter()->sortable(),
                TextColumn::make('semester')->label('Semester')->alignCenter()->sortable(),
                TextColumn::make('profil_lulusan')
                    ->label('Profil Lulusan')
                    ->badge()
                    ->color(fn (string $state) => match ($state) {
                        'PL 1' => 'success',
                        'PL 2' => 'info',
                        'PL 3' => 'warning',
                        'PL 4' => 'danger',
                        default => 'gray',
                    }),
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