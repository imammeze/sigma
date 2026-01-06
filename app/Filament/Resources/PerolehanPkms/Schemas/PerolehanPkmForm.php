<?php

namespace App\Filament\Resources\PerolehanPkms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class PerolehanPkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                TextInput::make('jenis_hki')
                    ->label('Jenis HKI')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nama_dtpr')
                    ->label('Nama DTPR')
                    ->required()
                    ->maxLength(255),

                Select::make('tahun_perolehan')
                    ->label('Tahun Perolehan')
                    ->options(['TS' => 'TS', 'TS-1' => 'TS-1', 'TS-2' => 'TS-2'])
                    ->required(),

                FileUpload::make('bukti_dokumen')
                    ->label('Bukti Dokumen')
                    ->disk('public')
                    ->directory('pkm/bukti')
                    ->preserveFilenames()
                    ->openable()
                    ->downloadable()
                    ->acceptedFileTypes([
                        'application/pdf',
                        'application/msword',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    ])
                    ->maxSize(15 * 1024),
            ])->columns(2);
    }
}