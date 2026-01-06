<?php

namespace App\Filament\Resources\RekognisiLulusans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RekognisiLulusanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('recognition_source')
                    ->label('Sumber Rekognisi')
                    ->required(),

                TextInput::make('recognition_type')
                    ->label('Jenis Pengakuan Lulusan (Rekognisi)'),

                TextInput::make('ts_3')
                    ->label('TS-3')
                    ->numeric()
                    ->minValue(0),

                TextInput::make('ts_2')
                    ->label('TS-2')
                    ->numeric()
                    ->minValue(0),

                TextInput::make('ts_1')
                    ->label('TS-1')
                    ->numeric()
                    ->minValue(0),

                Textarea::make('evidence_link')
                    ->label('Link Bukti')
                    ->rows(2)
                    ->nullable(),

                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),
            ]);
    }
}