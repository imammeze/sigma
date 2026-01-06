<?php

namespace App\Filament\Resources\PenggunaanDanas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class PenggunaanDanaForm
{
    private const SUB_OPS_OPERASIONAL = [
        'Biaya Operasional Pendidikan' => 'Biaya Operasional Pendidikan',
        'Biaya Dosen (Gaji, Honor)'    => 'Biaya Dosen (Gaji, Honor)',
        'Biaya Tenaga Kependidikan'    => 'Biaya Tenaga Kependidikan (Gaji, Honor)',
        'Bahan & Peralatan Habis Pakai'=> 'Biaya Operasional Pembelajaran (Bahan & Peralatan Habis Pakai)',
        'Biaya Tidak Langsung'         => 'Biaya Operasional Tidak Langsung (listrik, air, dll.)',
        'Penyerahan Hibah & Pembatasan'=> 'Biaya Penyerahan Hibah dengan Pembatasan',
        'Kemahasiswaan'                => 'Biaya operasional kemahasiswaan',
    ];

    private const SUB_OPS_PENELITIAN_PKM = [
        'Biaya Penelitian' => 'Biaya Penelitian',
        'Biaya PKM'        => 'Biaya PKM', 
    ];

    private const SUB_OPS_INVESTASI = [
        'Biaya Investasi SDM'      => 'Biaya Investasi SDM',
        'Biaya Investasi Sarana'   => 'Biaya Investasi Sarana',
        'Biaya Investasi Prasarana'=> 'Biaya Investasi Prasarana',
        'Biaya Investasi YPT'      => 'Biaya Investasi YPT',
    ];
    
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                ->label('Kategori')
                ->options([
                    'operasional'    => 'Operasional Pendidikan',
                    'penelitian_pkm' => 'Penelitian & PKM',
                    'investasi'      => 'Investasi',
                ])
                ->required()
                ->reactive()
                ->afterStateUpdated(function (Set $set) {
                    $set('subcategory', null);
                    $set('penggunaan_dana', null);
                }),

            Select::make('subcategory')
                ->label('Sub Kategori')
                ->options(fn (Get $get) => match ($get('category')) {
                    'operasional'    => self::SUB_OPS_OPERASIONAL,
                    'penelitian_pkm' => self::SUB_OPS_PENELITIAN_PKM,
                    'investasi'      => self::SUB_OPS_INVESTASI,
                    default          => [],
                })
                ->required()
                ->hidden(fn (Get $get) => $get('category') === null)
                ->reactive()
                ->afterStateUpdated(function (Set $set, ?string $state) {
                    if ($state) {
                        $set('penggunaan_dana', $state);
                    }
                }),

            TextInput::make('penggunaan_dana')
                ->label('Penggunaan Dana')
                ->disabled()
                ->dehydrated()
                ->required(),

            TextInput::make('ts_2')
                ->label('TS-2')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
            TextInput::make('ts_1')
                ->label('TS-1')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
            TextInput::make('ts')
                ->label('TS')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),

            FileUpload::make('bukti_pdf')
                ->label('Bukti (PDF)')
                ->disk('public')
                ->directory('expense-usage/bukti')
                ->preserveFilenames()
                ->acceptedFileTypes(['application/pdf'])
                ->maxSize(10 * 1024) 
                ->openable()
                ->downloadable(),
        ])->columns(2);;
    }
}