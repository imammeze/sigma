<?php

namespace App\Filament\Resources\DataMahasiswas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Fieldset;

class DataMahasiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('ts_label')
                    ->label('TS')
                    ->options([
                        'TS-3' => 'TS-3',
                        'TS-2' => 'TS-2',
                        'TS-1' => 'TS-1',
                        'TS'   => 'TS',
                    ])
                    ->required(),

                TextInput::make('capacity')
                    ->label('Daya Tampung')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                Fieldset::make('Jumlah Calon Mahasiswa')->schema([
                    TextInput::make('applicants_total')
                        ->label('Pendaftar')
                        ->numeric()->minValue(0)->required(),
                    TextInput::make('applicants_affirmation')
                        ->label('Pendaftar Afirmasi')
                        ->numeric()->minValue(0)->required(),
                    TextInput::make('applicants_special_needs')
                        ->label('Pendaftar Kebutuhan Khusus')
                        ->numeric()->minValue(0)->required(),
                ])->columnSpanFull(),

                Fieldset::make('Jumlah Mahasiswa Baru')->schema([
                    TextInput::make('new_regular_accepted')
                        ->label('Mhs Baru Reguler - Diterima')
                        ->numeric()->minValue(0)->required(),
                    TextInput::make('new_regular_affirmation')
                        ->label('Mhs Baru Reguler - Afirmasi')
                        ->numeric()->minValue(0)->required(),
                    TextInput::make('new_regular_special_needs')
                        ->label('Mhs Baru Reguler - Keb. Khusus')
                        ->numeric()->minValue(0)->required(),
                    TextInput::make('new_rpl_accepted')
                        ->label('Mhs Baru RPL - Diterima')
                        ->numeric()->minValue(0)->required(),
                    TextInput::make('new_rpl_affirmation')
                        ->label('Mhs Baru RPL - Afirmasi')
                        ->numeric()->minValue(0)->required(),
                    TextInput::make('new_rpl_special_needs')
                        ->label('Mhs Baru RPL - Keb. Khusus')
                        ->numeric()->minValue(0)->required(),
                 ]),

                
                Fieldset::make('Jumlah Mahasiswa Baru')->schema([
                TextInput::make('active_regular_accepted')
                    ->label('Mhs Aktif Reguler - Diterima')
                    ->numeric()->minValue(0)->required(),
                TextInput::make('active_regular_affirmation')
                    ->label('Mhs Aktif Reguler - Afirmasi')
                    ->numeric()->minValue(0)->required(),
                TextInput::make('active_regular_special_needs')
                    ->label('Mhs Aktif Reguler - Keb. Khusus')
                    ->numeric()->minValue(0)->required(),

                TextInput::make('active_rpl_accepted')
                    ->label('Mhs Aktif RPL - Diterima')
                    ->numeric()->minValue(0)->required(),
                TextInput::make('active_rpl_affirmation')
                    ->label('Mhs Aktif RPL - Afirmasi')
                    ->numeric()->minValue(0)->required(),
                TextInput::make('active_rpl_special_needs')
                    ->label('Mhs Aktif RPL - Keb. Khusus')
                    ->numeric()->minValue(0)->required(),
                ]),
            ]);
    }
}