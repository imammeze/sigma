<?php

namespace App\Filament\Resources\PetaPemenuhanCpls\Schemas;

use Filament\Schemas\Schema;
use App\Models\IsiPembelajaran;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class PetaPemenuhanCplForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('cpl')
                ->label('CPL')
                ->required()
                ->options([
                    'CPL 1' => 'CPL 1',
                    'CPL 2' => 'CPL 2',
                    'CPL 3' => 'CPL 3',
                    'CPL 4' => 'CPL 4',
                    'CPL 5' => 'CPL 5',
                    'CPL 6' => 'CPL 6',
                    'CPL 7' => 'CPL 7',
                    'CPL 8' => 'CPL 8',
                    'CPL 9' => 'CPL 9',
                    'CPL 10' => 'CPL 10',
                ])
                ->searchable(),

            Select::make('cpmk_choice')
                ->label('CPMK')
                ->options([
                    'CPMK 01' => 'CPMK 01',
                    'CPMK 02' => 'CPMK 02',
                    'CPMK 03' => 'CPMK 03',
                    'CPMK 04' => 'CPMK 04',
                    'CPMK 05' => 'CPMK 05',
                    'CPMK 06' => 'CPMK 06',
                    'CPMK 07' => 'CPMK 07',
                    'CPMK 08' => 'CPMK 08',
                    'CPMK 09' => 'CPMK 09',
                    'CPMK 10' => 'CPMK 10',
                    'CPMK 11' => 'CPMK 11',
                    'CPMK 12' => 'CPMK 12',
                    'CPMK 13' => 'CPMK 13',
                    'CPMK 14' => 'CPMK 14',
                    'LAINNYA' => 'Lainnya (isi manual)',
                ])
                ->reactive()
                ->afterStateUpdated(function (Set $set, ?string $state) {
                    if ($state !== 'LAINNYA') {
                        $set('cpmk_custom', null);
                    }
                })
                ->required(),

            TextInput::make('cpmk_custom')
                ->label('CPMK (Lainnya)')
                ->placeholder('Isi CPMK manual di sini')
                ->hidden(fn (Get $get) => $get('cpmk_choice') !== 'LAINNYA')
                ->required(fn (Get $get) => $get('cpmk_choice') === 'LAINNYA')
                ->maxLength(255),

            Fieldset::make('Mata Kuliah per Semester')
                ->schema([
                    static::semesterSelect('semester_1_mata_kuliah_id', 'Semester 1'),
                    static::semesterSelect('semester_2_mata_kuliah_id', 'Semester 2'),
                    static::semesterSelect('semester_3_mata_kuliah_id', 'Semester 3'),
                    static::semesterSelect('semester_4_mata_kuliah_id', 'Semester 4'),
                    static::semesterSelect('semester_5_mata_kuliah_id', 'Semester 5'),
                    static::semesterSelect('semester_6_mata_kuliah_id', 'Semester 6'),
                    static::semesterSelect('semester_7_mata_kuliah_id', 'Semester 7'),
                    static::semesterSelect('semester_8_mata_kuliah_id', 'Semester 8'),
                ]),
            ])->columns(1);
    }

    protected static function semesterSelect(string $name, string $label): Select
    {
        return Select::make($name)
            ->label($label)
            ->searchable()
            ->preload()
            ->options(function () {
                return IsiPembelajaran::query()
                    ->orderBy('mata_kuliah')
                    ->pluck('mata_kuliah', 'id');
            })
            ->nullable();
    }
}