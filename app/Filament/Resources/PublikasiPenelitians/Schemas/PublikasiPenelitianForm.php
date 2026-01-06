<?php

namespace App\Filament\Resources\PublikasiPenelitians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class PublikasiPenelitianForm
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

                Select::make('jenis_publikasi')
                    ->label('Jenis Publikasi')
                    ->options([
                        'Internasional Bereputasi'        => 'Internasional Bereputasi',
                        'Internasional Tidak Bereputasi'  => 'Internasional Tidak Bereputasi',
                        'Jurnal Sinta 1' => 'Jurnal Sinta 1',
                        'Jurnal Sinta 2' => 'Jurnal Sinta 2',
                        'Jurnal Sinta 3' => 'Jurnal Sinta 3',
                        'Jurnal Sinta 4' => 'Jurnal Sinta 4',
                        'Jurnal Sinta 5' => 'Jurnal Sinta 5',
                        'Tidak Terakreditasi' => 'Tidak Terakreditasi',
                    ])
                    ->required()
                    ->searchable(),

                Select::make('tahun_terbit')
                    ->label('Tahun Terbit')
                    ->options(['TS' => 'TS', 'TS-1' => 'TS-1', 'TS-2' => 'TS-2'])
                    ->required(),

                Textarea::make('link_bukti')
                    ->label('Link Bukti')
                    ->rows(3)
                    ->placeholder("Satu link per baris\nhttps://...")
                    ->nullable(),
            ]);
    }
}