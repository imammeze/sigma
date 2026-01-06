<?php

namespace App\Filament\Resources\SaranaPrasaranaPenelitians\Pages;

use App\Filament\Resources\SaranaPrasaranaPenelitians\SaranaPrasaranaPenelitianResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSaranaPrasaranaPenelitian extends ViewRecord
{
    protected static string $resource = SaranaPrasaranaPenelitianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
