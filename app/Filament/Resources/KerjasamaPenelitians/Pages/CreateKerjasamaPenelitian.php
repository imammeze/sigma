<?php

namespace App\Filament\Resources\KerjasamaPenelitians\Pages;

use App\Filament\Resources\KerjasamaPenelitians\KerjasamaPenelitianResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKerjasamaPenelitian extends CreateRecord
{
    protected static string $resource = KerjasamaPenelitianResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}