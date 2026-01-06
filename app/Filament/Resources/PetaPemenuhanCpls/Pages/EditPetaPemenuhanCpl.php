<?php

namespace App\Filament\Resources\PetaPemenuhanCpls\Pages;

use App\Filament\Resources\PetaPemenuhanCpls\PetaPemenuhanCplResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPetaPemenuhanCpl extends EditRecord
{
    protected static string $resource = PetaPemenuhanCplResource::class;

     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}