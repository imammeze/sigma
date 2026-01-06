<?php

namespace App\Filament\Resources\KerjasamaPenelitians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class KerjasamaPenelitianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul_kerjasama')
                ->label('Judul Kerjasama')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            TextInput::make('mitra_kerjasama')
                ->label('Mitra Kerjasama')
                ->required()
                ->maxLength(255),

            Select::make('sumber')
                ->label('Sumber')
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

            FileUpload::make('bukti_files')
                ->label('Bukti (PDF/Dokumen) — boleh 1 atau lebih file')
                ->disk('public')
                ->directory('penelitian/kerjasama/bukti')
                ->multiple()                 
                ->preserveFilenames()
                ->openable()
                ->downloadable()
                ->acceptedFileTypes([
                    'application/pdf',
                    'application/msword',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'image/jpeg', 'image/png',
                ])
                ->maxSize(20 * 1024)     
                ->helperText('Boleh upload 1 file, atau lebih dari 1 file.'),
            ]);
    }
}