<?php

namespace App\Filament\Resources\PerolehanHkis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class PerolehanHkiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                ->label('Judul')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

                Select::make('jenis_hki')
                    ->label('Jenis HKI')
                    ->options([
                        'Hak Cipta' => 'Hak Cipta',
                    ])
                    ->required(),

                Select::make('tahun_terbit')
                    ->label('Tahun Terbit')
                    ->options([
                        'TS' => 'TS', 'TS-1' => 'TS-1', 'TS-2' => 'TS-2',
                    ])
                    ->required(),

                DatePicker::make('tanggal_terbit')
                    ->label('Tanggal Terbit')
                    ->native(false)       
                    ->displayFormat('d M Y')
                    ->closeOnDateSelection()
                    ->nullable(),

                Textarea::make('link_bukti')
                    ->label('Link Bukti')
                    ->rows(3)
                    ->placeholder("Satu link per baris\nhttps://...")
                    ->nullable(),
            ]);
    }
}