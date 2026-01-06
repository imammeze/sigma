<?php

namespace App\Filament\Resources\PembiayaanPkms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class PembiayaanPkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_dtpr')
                ->label('Nama DTPR (Ketua PKM)')
                ->required()
                ->maxLength(255),

            TextInput::make('judul_pkm')
                ->label('Judul PKM')
                ->required()
                ->maxLength(255),

            TextInput::make('jumlah_mahasiswa')
                ->label('Jumlah Mahasiswa yang Terlibat')
                ->numeric()->integer()->minValue(0),

            TextInput::make('jenis_hibah_pkm')
                ->label('Jenis Hibah PKM')
                ->maxLength(255),

            Select::make('sumber_dana')
                ->label('Sumber Dana (L/N/I)')
                ->options([
                    'Lokal/Wilayah' => 'Lokal/Wilayah',
                    'Nasional'      => 'Nasional',
                    'Internasional' => 'Internasional',
                ])
                ->required(),

            TextInput::make('durasi')
                ->label('Durasi (tahun)')
                ->numeric()->integer()->minValue(0),

            TextInput::make('ts_2')->label('TS-2')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
            TextInput::make('ts_1')->label('TS-1')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
            TextInput::make('ts')->label('TS')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),

            FileUpload::make('bukti_pdf')
                ->label('Bukti (PDF)')
                ->disk('public')
                ->directory('pkm-pembiayaan/bukti')
                ->acceptedFileTypes(['application/pdf'])
                ->maxSize(10 * 1024)
                ->preserveFilenames()
                ->openable()
                ->downloadable(),
            ])->columns(2);
    }
}