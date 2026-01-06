<?php

namespace App\Filament\Resources\PembiayaanPenelitians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class PembiayaanPenelitianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_dtpr')
                    ->label('Nama DTPR')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('judul_penelitian')
                    ->label('Judul Penelitian')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('jenis_hibah_penelitian')
                    ->label('Jenis Hibah Penelitian')
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('jumlah_mahasiswa')
                    ->label('Jumlah Mahasiswa')
                    ->numeric()
                    ->integer()
                    ->minValue(0),

                Select::make('sumber')
                    ->label('Sumber (L/N/I)')
                    ->options([
                    'Lokal/Wilayah'=>'Lokal/Wilayah','Nasional'=>'Nasional','Internasional'=>'Internasional',
                ])->required(),

                TextInput::make('durasi')->label('Durasi')->numeric()->integer()->minValue(0),

                TextInput::make('ts_2')->label('TS-2')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
                TextInput::make('ts_1')->label('TS-1')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),
                TextInput::make('ts')->label('TS')->numeric()->integer()->minValue(0)->default(0)->prefix('Rp'),

                Textarea::make('link_bukti')
                    ->label('Link Bukti')
                    ->placeholder("Satu link per baris\nhttps://...\nhttps://...")
                    ->columnSpanFull()
                    ->rows(3),
            ]);
    }
}