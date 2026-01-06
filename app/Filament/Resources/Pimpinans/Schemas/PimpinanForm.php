<?php

namespace App\Filament\Resources\Pimpinans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class PimpinanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('unit_kerja')
                    ->label('Unit Kerja')
                    ->required(),
                TextInput::make('nama')
                    ->label('Nama Ketua')
                    ->required()
                    ,
                TextInput::make('periode')
                    ->label('Periode Jabatan')
                    ->required()
                    ,
                TextInput::make('pendidikan_terakhir')
                    ->label('Pendidikan Terakhir')
                    ->required()
                    ,
                TextInput::make('jabatan')  
                    ->label('Jabatan Fungsional')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('tupoksi')
                    ->label('Tugas Pokok dan Fungsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}