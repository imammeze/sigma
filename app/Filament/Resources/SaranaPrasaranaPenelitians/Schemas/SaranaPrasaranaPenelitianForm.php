<?php

namespace App\Filament\Resources\SaranaPrasaranaPenelitians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Fieldset;

class SaranaPrasaranaPenelitianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_prasarana')
                ->label('Nama Prasarana')
                ->required()
                ->maxLength(255),

                Fieldset::make('Kapasitas & Luas')
                    ->schema([
                        TextInput::make('daya_tampung')
                            ->label('Daya Tampung')->numeric()->integer()->minValue(0),
                        TextInput::make('luas_ruang')
                            ->label('Luas Ruang (m²)')->numeric()->integer()->minValue(0),
                    ])->columns(2),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'milik' => 'Milik Sendiri',
                        'sewa'  => 'Sewa',
                    ])
                    ->required(),

                Select::make('lisensi')
                    ->label('Lisensi')
                    ->options([
                        'berlisensi'        => 'Berlisensi',
                        'public_domain'     => 'Public Domain',
                        'tidak_berlisensi'  => 'Tidak Berlisensi',
                    ])
                    ->nullable(),

                RichEditor::make('perangkat')
                    ->label('Perangkat')
                    ->placeholder("- A. Perangkat keras: ...\n- B. Perangkat lunak: ...")
                    ->columnSpanFull(),

                FileUpload::make('bukti_file')
                    ->label('Bukti (dokumen)')
                    ->disk('public')
                    ->directory('penelitian/sarana-prasarana/bukti')
                    ->preserveFilenames()
                    ->openable()
                    ->downloadable()
                    ->acceptedFileTypes([
                        'application/pdf',
                    ])
                    ->maxSize(15 * 1024),
            ]);
    }
}