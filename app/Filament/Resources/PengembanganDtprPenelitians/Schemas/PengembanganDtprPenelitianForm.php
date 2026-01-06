<?php

namespace App\Filament\Resources\PengembanganDtprPenelitians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class PengembanganDtprPenelitianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jenis_pengembangan_dtpr')
                ->label('Jenis Pengembangan DTPR')
                ->required()
                ->maxLength(255),

                TextInput::make('nama_dtpr')
                    ->label('Nama DTPR')
                    ->required()
                    ->maxLength(255),

                Select::make('tahun_akademik')
                    ->label('Tahun Akademik')
                    ->options([
                        'TS'   => 'TS',
                        'TS-1' => 'TS-1',
                        'TS-2' => 'TS-2',
                    ])
                    ->required(),

                Textarea::make('link_bukti')
                    ->label('Link Bukti')
                    ->rows(3)
                    ->placeholder("Masukkan satu atau lebih URL (pisahkan dengan baris baru)\nhttps://contoh.com")
                    ->nullable(),
            ]);
    }
}