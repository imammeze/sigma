<?php

namespace App\Filament\Resources\UnitSpmis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Schemas\Components\Fieldset;

class UnitSpmiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jenis_unit_spmi')
                ->label('Unit SPMI')
                ->placeholder('PT / UPPS / dsb.')
                ->required()
                ->maxLength(255),

                TextInput::make('nama_unit_spmi')
                    ->label('Nama Unit SPMI')
                    ->placeholder('Unit SPM, Perencanaan dan Pengembangan Pembelajaran')
                    ->required()
                    ->maxLength(255),

                Textarea::make('dokumen_spmi')
                    ->label('Dokumen SPMI (link)')
                    ->placeholder("Satu atau lebih link.")
                    ->rows(3),

                Fieldset::make('Jumlah Auditor Mutu Internal')
                    ->schema([
                        TextInput::make('jumlah_auditor')
                            ->numeric()->integer()->minValue(0)->label('Jumlah Auditor'),
                        TextInput::make('certified')
                            ->numeric()->integer()->minValue(0)->label('Certified'),
                        TextInput::make('non_certified')
                            ->numeric()->integer()->minValue(0)->label('Non Certified'),
                        TextInput::make('frekuensi_audit')
                            ->numeric()->integer()->minValue(0)->label('Frekuensi / Tahun'),
                    ])
                    ->columns(2),

                Textarea::make('bukti_certified_auditor')
                    ->label('Bukti Certified Auditor (link)')
                    ->placeholder("Satu atau lebih link, pisahkan baris atau koma.")
                    ->rows(3),

                Textarea::make('laporan_audit')
                    ->label('Laporan Audit (link)')
                    ->placeholder("Satu atau lebih link, pisahkan baris atau koma.")
                    ->rows(3),
            ])->columns(2);
    }
}