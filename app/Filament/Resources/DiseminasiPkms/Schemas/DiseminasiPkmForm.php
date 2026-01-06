<?php

namespace App\Filament\Resources\DiseminasiPkms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class DiseminasiPkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_dtpr')
                ->label('Nama DTPR (Ketua)')
                ->required()
                ->maxLength(255),

                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                Select::make('diseminasi')
                    ->label('Diseminasi Hasil PKM')
                    ->options([
                        'Media Massa Elektronik Lokal'     => 'Media Massa Elektronik Lokal',
                        'Media Massa Elektronik Nasional'  => 'Media Massa Elektronik Nasional',
                        'Jurnal PKM'                       => 'Jurnal PKM',
                        'Social Media Youtube'             => 'Social Media Youtube',
                    ])
                    ->required(),

                Select::make('waktu')
                    ->label('Waktu')
                    ->options(['TS' => 'TS', 'TS-1' => 'TS-1', 'TS-2' => 'TS-2'])
                    ->required(),

                Textarea::make('link_bukti')
                    ->label('Link Bukti')
                    ->rows(3),
            ])->columns(2);
    }
}