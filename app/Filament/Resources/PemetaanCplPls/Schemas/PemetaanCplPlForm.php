<?php

namespace App\Filament\Resources\PemetaanCplPls\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PemetaanCplPlForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('cpl')
                    ->label('Capaian Pembelajaran (CPL)')
                ->options([
                    'CPL 1'=>'CPL 1','CPL 2'=>'CPL 2','CPL 3'=>'CPL 3','CPL 4'=>'CPL 4','CPL 5'=>'CPL 5',
                    'CPL 6'=>'CPL 6','CPL 7'=>'CPL 7','CPL 8'=>'CPL 8','CPL 9'=>'CPL 9','CPL 10'=>'CPL 10',
                ])
                ->required()
                ->searchable(),
                Select::make('pl')
                     ->label('Profil Lulusan (PL)')
                ->options(['PL 1'=>'PL 1','PL 2'=>'PL 2','PL 3'=>'PL 3','PL 4'=>'PL 4'])
                ->required()
                ->searchable(),
            ]);
    }
}