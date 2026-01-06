<?php

namespace App\Filament\Resources\Fundings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class FundingForm
{
    public const SUB_OPTIONS = [
            'UP3'                    => 'UP3',
            'SDP2'                   => 'SDP2',
            'NTF Layanan'           => 'NTF Layanan',
            'NTF Hibah'             => 'NTF Hibah',
            'NTF Hibah Prodi Riset' => 'NTF Hibah Prodi Riset',
            'NTF Hibah PKM'         => 'NTF Hibah PKM',
            'NTF Jasa Giro'         => 'NTF Jasa Giro',
        ];
    
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                ->label('Kategori')
                ->options([
                    'bpp'     => 'Dana dari BPP Mahasiswa',
                    'yayasan' => 'Dana dari Yayasan',
                    'luar'    => 'Dana dari luar BPP, non Yayasan',
                    'lainnya' => 'Lainnya',
                ])
                ->required()
                ->reactive()
                ->afterStateUpdated(function (Set $set, ?string $state) {
                    $set('subcategory', null);
                    $set('other_name', null);
                    $set('sumber_pendanaan', match ($state) {
                        'bpp'     => 'Dana dari BPP Mahasiswa',
                        'yayasan' => 'Dana dari Yayasan',
                        'luar'    => null, 
                        'lainnya' => null, 
                        default   => null,
                    });
                }),
                
                Select::make('subcategory')
                ->label('Sub Sumber (a–g)')
                ->options(self::SUB_OPTIONS)
                ->hidden(fn (Get $get) => $get('category') !== 'luar')
                ->required(fn (Get $get) => $get('category') === 'luar')
                ->reactive()
                ->afterStateUpdated(function (Set $set, ?string $state) {
                    if ($state) {
                        $set('sumber_pendanaan', $state); 
                    }
                }),

               TextInput::make('other_name')
                ->label('Nama Sumber (Lainnya)')
                ->placeholder('Contoh: Donasi Alumni')
                ->hidden(fn (Get $get) => $get('category') !== 'lainnya')
                ->required(fn (Get $get) => $get('category') === 'lainnya')
                ->reactive()
                ->afterStateUpdated(fn (Set $set, ?string $val) => $set('sumber_pendanaan', $val)),

                TextInput::make('sumber_pendanaan')
                ->label('Sumber Pendanaan')
                ->disabled()
                ->dehydrated(), // tetap tersimpan walau disabled

                TextInput::make('ts')
                ->label('TS')
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->default(0)
                    ->prefix('Rp'),
            
                TextInput::make('ts_1')
                ->label('TS-1')
                ->numeric()
                ->integer()
                ->minValue(0)
                ->default(0)
                ->prefix('Rp'),
                
                TextInput::make('ts_2')
                    ->label('TS-2')
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->default(0)
                    ->prefix('Rp'),

            // UPLOAD PDF BUKTI
            FileUpload::make('bukti_pdf')
                ->label('Bukti (PDF)')
                ->disk('public')
                ->directory('fundings/bukti')
                ->preserveFilenames()
                ->acceptedFileTypes(['application/pdf'])
                ->maxSize(10 * 1024)
                ->openable()
                ->downloadable(),
        ])->columns(2);;
    }
}