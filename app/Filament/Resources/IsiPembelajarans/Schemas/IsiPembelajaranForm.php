<?php

namespace App\Filament\Resources\IsiPembelajarans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class IsiPembelajaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('mata_kuliah')
                ->label('Mata Kuliah')
                ->required()
                ->maxLength(255),

            TextInput::make('sks')
                ->label('SKS')
                ->numeric()
                ->integer()
                ->minValue(0)
                ->required(),

            TextInput::make('semester')
                ->label('Semester')
                ->required()
                ->maxLength(255),

            Select::make('profil_lulusan')
                ->label('Profil Lulusan (PL)')
                ->options([
                    'PL 1' => 'PL 1',
                    'PL 2' => 'PL 2',
                    'PL 3' => 'PL 3',
                    'PL 4' => 'PL 4',
                ])
                ->searchable()
                ->nullable(),
            ]);
    }
}