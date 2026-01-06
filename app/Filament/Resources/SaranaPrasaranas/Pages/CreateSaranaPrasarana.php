<?php

namespace App\Filament\Resources\SaranaPrasaranas\Pages;

use App\Filament\Resources\SaranaPrasaranas\SaranaPrasaranaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSaranaPrasarana extends CreateRecord
{
    protected static string $resource = SaranaPrasaranaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}