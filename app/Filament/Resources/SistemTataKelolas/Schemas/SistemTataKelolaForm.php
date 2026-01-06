<?php

namespace App\Filament\Resources\SistemTataKelolas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class SistemTataKelolaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jenis_tata_kelola')
                ->label('Jenis Tata Kelola')
                ->required()
                ->maxLength(255),

            TextInput::make('nama_sistem_informasi')
                ->label('Nama Sistem Informasi')
                ->required()
                ->maxLength(255),

            Select::make('akses')
                ->label('Akses (Lokal/Internet)')
                ->options([
                    'Internet' => 'Internet',
                    'Lokal'    => 'Lokal',
                ])
                ->required(),

            TextInput::make('unit_kerja')
                ->label('Unit Kerja / SDM Pengelola')
                ->required()
                ->maxLength(255),

            Textarea::make('link_bukti')
                ->label('Link Bukti')
        ])->columns(2);
    }
}