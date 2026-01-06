<?php

namespace App\Filament\Resources\SaranaPrasaranaPenelitians\Pages;

use App\Filament\Resources\SaranaPrasaranaPenelitians\SaranaPrasaranaPenelitianResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSaranaPrasaranaPenelitian extends CreateRecord
{
    protected static string $resource = SaranaPrasaranaPenelitianResource::class;

     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}