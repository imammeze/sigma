<?php

namespace App\Filament\Resources\SaranaPrasaranaPkms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Fieldset;

class SaranaPrasaranaPkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_prasarana')
                        ->label('Nama Prasarana')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    Fieldset::make('Kapasitas & Luas')
                        ->schema([
                            TextInput::make('daya_tampung')
                                ->label('Daya Tampung')
                                ->numeric()->integer()->minValue(0)
                                ->default(0),
                            TextInput::make('luas_ruang')
                                ->label('Luas Ruang (m²)')
                                ->numeric()->integer()->minValue(0)
                                ->default(0),
                        ])->columns(2)->columnSpanFull(),

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

                    FileUpload::make('bukti_files')
                        ->label('Bukti (PDF, multiple)')
                        ->disk('public')
                        ->directory('pkm/sarana-prasarana/bukti')
                        ->acceptedFileTypes(['application/pdf'])
                        ->multiple()
                        ->maxFiles(5)
                        ->preserveFilenames()
                        ->openable()
                        ->downloadable()
                        ->required(false)          
                        ->helperText('Boleh upload 1 atau lebih file PDF.')
                        ->columnSpanFull(),
            ]);
    }
}