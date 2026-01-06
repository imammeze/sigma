<?php

namespace App\Filament\Resources\RerataBebanDtprs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Fieldset;

class RerataBebanDtprForm
{
    public static function hitungTotal(Get $get, Set $set): void
    {
        $fields = [
            'sks_ps_sendiri',
            'sks_ps_lain_pt_sendiri',
            'sks_pt_lain',
            'sks_penelitian',
            'sks_pengabdian',
            'sks_manajemen_pt_sendiri',
            'sks_manajemen_pt_lain',
        ];

        $total = 0;
        foreach ($fields as $f) {
            $val = $get($f);
            $total += is_numeric($val) ? (float) $val : 0;
        }

        $set('total_sks', number_format($total, 2, '.', ''));
    }

    
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_dtpr')
                ->label('Nama DTPR')
                ->required()
                ->columnSpanFull(),

                 Fieldset::make('SKS Pengajaran')->schema([
                TextInput::make('sks_ps_sendiri')
                    ->label('SKS PS Sendiri')
                    ->numeric()->step('0.01')
                    ->reactive()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::hitungTotal($get, $set)),

                TextInput::make('sks_ps_lain_pt_sendiri')
                    ->label('SKS PS Lain, PT Sendiri')
                    ->numeric()->step('0.01')
                    ->reactive()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::hitungTotal($get, $set)),

                TextInput::make('sks_pt_lain')
                    ->label('SKS PT Lain')
                    ->numeric()->step('0.01')
                    ->reactive()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::hitungTotal($get, $set)),
                 ])->columnSpanFull(),
                TextInput::make('sks_penelitian')
                    ->label('SKS Penelitian')
                    ->numeric()->step('0.01')
                    ->reactive()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::hitungTotal($get, $set)),

                TextInput::make('sks_pengabdian')
                    ->label('SKS Pengabdian')
                    ->numeric()->step('0.01')
                    ->reactive()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::hitungTotal($get, $set)),

                Fieldset::make('SKS Manajemen')->schema([
                TextInput::make('sks_manajemen_pt_sendiri')
                    ->label('SKS Manajemen PT Sendiri')
                    ->numeric()->step('0.01')
                    ->reactive()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::hitungTotal($get, $set)),

                TextInput::make('sks_manajemen_pt_lain')
                    ->label('SKS Manajemen PT Lain')
                    ->numeric()->step('0.01')
                    ->reactive()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::hitungTotal($get, $set)),
                ])->columnSpanFull(),
                // Kolom total → otomatis diisi, tidak bisa diubah user
                TextInput::make('total_sks')
                    ->label('Total SKS')
                    ->numeric()->step('0.01')
                    ->disabled()
                    ->dehydrated() // tetap tersimpan walaupun disabled
                    ->required(),

                TextInput::make('evidence')
                    ->label('Evidence (Link)')
                    ->placeholder('https://...'),

                Select::make('hki')
                    ->label('HKI')
                    ->options([
                        'Data HKI Diminta' => 'Data HKI Diminta',
                        'Tidak ada HKI'    => 'Tidak ada HKI',
                    ])
                    ->nullable(),
            ])->columns(2);;
    }
}