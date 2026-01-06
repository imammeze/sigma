<?php

namespace App\Filament\Resources\RerataMasaTungguLuluses\Pages;

use App\Filament\Resources\RerataMasaTungguLuluses\RerataMasaTungguLulusResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRerataMasaTungguLulus extends CreateRecord
{
    protected static string $resource = RerataMasaTungguLulusResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}