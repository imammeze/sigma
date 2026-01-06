<?php

namespace App\Filament\Resources\KondisiMahasiswas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class KondisiMahasiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kategori')
                ->label('Kategori')
                ->required()
                ->options([
                    'Mahasiswa Baru'                 => 'Mahasiswa Baru',
                    'Mahasiswa Aktif pada saat TS'   => 'Mahasiswa Aktif pada saat TS',
                    'Lulus pada saat TS'             => 'Lulus pada saat TS',
                    'Mengundurkan Diri/DO pada saat TS' => 'Mengundurkan Diri/DO pada saat TS',
                ])
                ->searchable(),

                TextInput::make('ts_2')
                    ->label('TS-2')->numeric()->integer()->minValue(0)->default(0)->reactive()
                    ->afterStateUpdated(fn (Set $set, Get $get) =>
                        $set('jumlah', (int)$get('ts_2') + (int)$get('ts_1') + (int)$get('ts'))
                    ),

                TextInput::make('ts_1')
                    ->label('TS-1')->numeric()->integer()->minValue(0)->default(0)->reactive()
                    ->afterStateUpdated(fn (Set $set, Get $get) =>
                        $set('jumlah', (int)$get('ts_2') + (int)$get('ts_1') + (int)$get('ts'))
                    ),

                TextInput::make('ts')
                    ->label('TS')->numeric()->integer()->minValue(0)->default(0)->reactive()
                    ->afterStateUpdated(fn (Set $set, Get $get) =>
                        $set('jumlah', (int)$get('ts_2') + (int)$get('ts_1') + (int)$get('ts'))
                    ),

                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->disabled()
                    ->dehydrated()
                    ->formatStateUsing(fn (Get $get) =>
                        (string)((int)$get('ts_2') + (int)$get('ts_1') + (int)$get('ts'))
                    ),
            ]);
    }
}