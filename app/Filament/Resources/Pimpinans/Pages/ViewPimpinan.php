<?php

namespace App\Filament\Resources\Pimpinans\Pages;

use App\Filament\Resources\Pimpinans\PimpinanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPimpinan extends ViewRecord
{
    protected static string $resource = PimpinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
