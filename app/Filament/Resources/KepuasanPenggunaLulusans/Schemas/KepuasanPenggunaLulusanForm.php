<?php

namespace App\Filament\Resources\KepuasanPenggunaLulusans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KepuasanPenggunaLulusanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jenis_kemampuan')
                    ->label('Jenis Kemampuan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('very_good')
                    ->label('Sangat Baik (%)')
                    ->numeric()
                    ->step('0.01')
                    ->minValue(0)
                    ->required(),

                TextInput::make('good')
                    ->label('Baik (%)')
                    ->numeric()
                    ->step('0.01')
                    ->minValue(0)
                    ->required(),

                TextInput::make('fair')
                    ->label('Cukup (%)')
                    ->numeric()
                    ->step('0.01')
                    ->minValue(0)
                    ->required(),

                TextInput::make('poor')
                    ->label('Kurang (%)')
                    ->numeric()
                    ->step('0.01')
                    ->minValue(0)
                    ->required(),

                Textarea::make('follow_up_plan')
                    ->label('Rencana Tindak Lanjut')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}