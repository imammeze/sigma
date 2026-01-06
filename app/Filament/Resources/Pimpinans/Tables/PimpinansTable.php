<?php

namespace App\Filament\Resources\Pimpinans\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PimpinansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('unit_kerja')->label('Unit Kerja')->searchable(),
                TextColumn::make('nama')->label('Nama Ketua')->searchable(),
                TextColumn::make('periode')->label('Periode Jabatan')->searchable(),
                TextColumn::make('pendidikan_terakhir')->label('Pendidikan Terakhir')->searchable(),
                TextColumn::make('jabatan')->label('Jabatan Fungsional')->searchable(),
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