<?php

namespace App\Filament\Resources\KualifikasiTendiks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class KualifikasiTendikForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'pustakawan'      => 'Pustakawan',
                        'laboran_teknisi' => 'Laboran/Teknisi',
                        'administrasi'    => 'Administrasi',
                        'lainnya'         => 'Lainnya',
                    ])
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (Set $set, ?string $state) {
                        $set('other_name', null);
                        $set('jenis_tendik', match ($state) {
                            'pustakawan'      => 'Pustakawan',
                            'laboran_teknisi' => 'Laboran/Teknisi',
                            'administrasi'    => 'Administrasi',
                            'lainnya'         => null,
                            default           => null,
                        });
                    }),

                TextInput::make('other_name')
                    ->label('Jenis Tenaga (Lainnya)')
                    ->placeholder('Contoh: Teknisi Audio Visual')
                    ->reactive()
                    ->hidden(fn (Get $get) => $get('category') !== 'lainnya')
                    ->required(fn (Get $get) => $get('category') === 'lainnya')
                    ->afterStateUpdated(fn (Set $set, ?string $val) => $set('jenis_tendik', $val)),

                TextInput::make('jenis_tendik')
                    ->label('Jenis Tenaga Kependidikan')
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                TextInput::make('s3')->numeric()->integer()->minValue(0)->label('S3'),
                TextInput::make('s2')->numeric()->integer()->minValue(0)->label('S2'),
                TextInput::make('s1')->numeric()->integer()->minValue(0)->label('S1'),
                TextInput::make('d4')->numeric()->integer()->minValue(0)->label('D4'),
                TextInput::make('d3')->numeric()->integer()->minValue(0)->label('D3'),
                TextInput::make('d2')->numeric()->integer()->minValue(0)->label('D2'),
                TextInput::make('d1')->numeric()->integer()->minValue(0)->label('D1'),
                TextInput::make('sma')->numeric()->integer()->minValue(0)->label('SMA/SMK/MA'),

                TextInput::make('unit_kerja')
                    ->label('Unit Kerja')
                    ->maxLength(255),

                FileUpload::make('ijazah_files')
                    ->label('Ijazah / Sertifikat (Multiple)')
                    ->disk('public')
                    ->directory('ijazah-sertifikat')
                    ->multiple()
                    ->preserveFilenames()
                    ->acceptedFileTypes([
                        'application/pdf',
                        'image/jpeg', 'image/png',
                    ])
                    ->maxSize(10 * 1024)
                    ->openable()
                    ->downloadable(),
            ]);
    }
}