<?php

namespace App\Filament\Resources\RerataMasaTungguLuluses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class RerataMasaTungguLulusForm
{
    protected static function recalculateResponseRate(Get $get, Set $set): void
    {
        $total   = (int) $get('total_graduates');
        $tracked = (int) $get('tracked_graduates');

        if ($total > 0 && $tracked >= 0) {
            $rate = round(($tracked / $total) * 100, 2);
            $set('response_rate', $rate);
        } else {
            $set('response_rate', null);
        }
    }
    
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('graduation_year_label')
                    ->label('Tahun Lulus')
                    ->options([
                        'TS-1' => 'TS-1',
                        'TS-2' => 'TS-2',
                        'TS-3'   => 'TS-3',
                    ])
                    ->required(),

                TextInput::make('total_graduates')
                    ->label('Jumlah Lulusan')
                    ->numeric()
                    ->minValue(0)
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (Get $get, Set $set) {
                        self::recalculateResponseRate($get, $set);
                    }),

                TextInput::make('tracked_graduates')
                    ->label('Jumlah Lulusan yang Terlacak')
                    ->numeric()
                    ->minValue(0)
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (Get $get, Set $set) {
                        self::recalculateResponseRate($get, $set);
                    }),

                TextInput::make('avg_waiting_time')
                    ->label('Rata-rata Waktu Tunggu (Bulan)')
                    ->numeric()
                    ->step('0.01')
                    ->minValue(0)
                    ->required(),

                TextInput::make('response_rate')
                    ->label('Response Rate (%)')
                    ->numeric()
                    ->step('0.01')
                    ->disabled()   // tidak bisa diedit manual
                    ->dehydrated() // tapi tetap disimpan ke DB
                    ->suffix('%'),
            ]);
    }
}