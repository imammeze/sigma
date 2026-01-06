<?php

namespace App\Filament\Resources\KeberagamanAsalMahasiswas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KeberagamanAsalMahasiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kategori')
            ->label('Kategori Asal Mahasiswa')
            ->options([
                'kota_kab_ps' => 'Kota/Kab sama dengan PS',
                'kabupaten_lain' => 'Kabupaten Lain',
                'provinsi_ps' => 'Provinsi sama dengan PS',
                'provinsi_lain' => 'Provinsi Lain',
                'negara_ps' => 'Negara sama dengan PS',
                'negara_lain' => 'Negara Lain',
                'afirmasi' => 'Afirmasi',
                'berkebutuhan_khusus' => 'Berkebutuhan Khusus',
            ])
            ->required(),

        TextInput::make('nama_asal')
            ->label('Nama Asal (Kab / Provinsi / Negara)')
            ->required()
            ->maxLength(255),

        TextInput::make('ts_2')
            ->numeric()
            ->default(0)
            ->label('TS-2'),

        TextInput::make('ts_1')
            ->numeric()
            ->default(0)
            ->label('TS-1'),

        TextInput::make('ts')
            ->numeric()
            ->default(0)
            ->label('TS'),

        Textarea::make('link_bukti')
            ->label('Link Bukti')
            ->columnSpanFull(),
            ]);
    }
}
