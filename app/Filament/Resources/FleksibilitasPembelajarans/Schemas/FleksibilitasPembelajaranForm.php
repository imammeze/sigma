<?php

namespace App\Filament\Resources\FleksibilitasPembelajarans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class FleksibilitasPembelajaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('item_label')
                ->label('Tahun Akademik / Bentuk Pembelajaran')
                ->required(),

            TextInput::make('ts_2')
                ->label('TS-2')
                ->numeric()
                ->minValue(0),

            TextInput::make('ts_1')
                ->label('TS-1')
                ->numeric()
                ->minValue(0),

            TextInput::make('ts')
                ->label('TS')
                ->numeric()
                ->minValue(0),

            TextInput::make('evidence_link')
                ->label('Link Bukti')
                ->url()
                ->nullable(),

            TextInput::make('sort_order')
                ->label('Urutan')
                ->numeric()
                ->minValue(0)
                ->default(0),
            ]);
    }
}