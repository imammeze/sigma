<?php

namespace App\Filament\Resources\KerjasamaPkms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class KerjasamaPkmForm
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

                TextInput::make('nama_dosen')
                    ->label('Nama Dosen')
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
                    ->label('Durasi')
                    ->helperText('Isikan hanya angka.')
                    ->numeric()
                    ->integer()
                    ->minValue(0),

                TextInput::make('ts_2')->label('TS-2')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
                TextInput::make('ts_1')->label('TS-1')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
                TextInput::make('ts')->label('TS')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),

                TextInput::make('status')
                    ->label('Status')
                    ->maxLength(255),

                FileUpload::make('bukti')
                    ->label('Bukti Dokumen')
                    ->disk('public')
                    ->directory('kerjasama-pkm/bukti')
                    ->preserveFilenames()
                    ->openable()
                    ->downloadable()
                    ->acceptedFileTypes([
                        'application/pdf',
                        'application/msword',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                        'image/jpeg', 'image/png',
                    ])
                    ->maxSize(15 * 1024),
            ]);
    }
}