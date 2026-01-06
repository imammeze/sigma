<?php

namespace App\Filament\Resources\PublikasiPenelitians\Pages;

use App\Filament\Resources\PublikasiPenelitians\PublikasiPenelitianResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePublikasiPenelitian extends CreateRecord
{
    protected static string $resource = PublikasiPenelitianResource::class;

      protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}