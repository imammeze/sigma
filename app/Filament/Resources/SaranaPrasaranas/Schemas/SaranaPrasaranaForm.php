<?php

namespace App\Filament\Resources\SaranaPrasaranas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class SaranaPrasaranaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_prasarana')
                ->label('Nama Prasarana')
                ->required()
                ->maxLength(255),

                TextInput::make('daya_tampung')
                    ->label('Daya Tampung')
                    ->numeric()
                    ->integer()
                    ->minValue(0),
                    
                TextInput::make('luas_ruang')
                    ->label('Luas Ruang (m²)')
                    ->numeric()
                    ->integer()
                    ->minValue(0),
        
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'milik' => 'Milik Sendiri',
                        'sewa'  => 'Sewa',
                    ])
                    ->required(),

                Select::make('lisensi')
                    ->label('Lisensi')
                    ->options([
                        'berlisensi'        => 'Berlisensi',
                        'public_domain'     => 'Public Domain',
                        'tidak_berlisensi'  => 'Tidak Berlisensi',
                    ])
                    ->required(),

                RichEditor::make('perangkat')
                    ->label('Perangkat')

                    ->columnSpanFull(),

                Textarea::make('link_bukti')
                    ->label('Link Bukti')
                    ->placeholder("Satu link per baris, contoh:\nhttps://...\nhttps://...")
                    ->rows(4)
                    ->columnSpanFull(),
            ])->columns(2);
    }
}