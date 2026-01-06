<?php

namespace App\Filament\Resources\PetaPemenuhanCpls\Pages;

use App\Filament\Resources\PetaPemenuhanCpls\PetaPemenuhanCplResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePetaPemenuhanCpl extends CreateRecord
{
    protected static string $resource = PetaPemenuhanCplResource::class;

     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}