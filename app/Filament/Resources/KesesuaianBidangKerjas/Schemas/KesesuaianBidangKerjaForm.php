<?php

namespace App\Filament\Resources\KesesuaianBidangKerjas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KesesuaianBidangKerjaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('graduation_year_label')
                    ->label('Tahun Lulus')
                    ->options([
                        'TS-3' => 'TS-3',
                        'TS-2' => 'TS-2',
                        'TS-1' => 'TS-1',
                    ])
                    ->required(),

                TextInput::make('total_graduates')
                    ->label('Jumlah Lulusan')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('tracked_graduates')
                    ->label('Jumlah Lulusan yang Terlacak')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('job_infokom')
                    ->label('Profesi Kerja Bidang Infokom')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('job_non_infokom')
                    ->label('Profesi Kerja Bidang Non Infokom')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('scope_multinational')
                    ->label('Multinasional / Internasional')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('scope_national')
                    ->label('Nasional')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('scope_entrepreneur')
                    ->label('Wirausaha')
                    ->numeric()
                    ->minValue(0)
                    ->required(),
            ]);
    }
}