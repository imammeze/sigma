<?php

namespace App\Filament\Resources\KerjasamaPkms\Pages;

use App\Filament\Resources\KerjasamaPkms\KerjasamaPkmResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKerjasamaPkm extends EditRecord
{
    protected static string $resource = KerjasamaPkmResource::class;

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