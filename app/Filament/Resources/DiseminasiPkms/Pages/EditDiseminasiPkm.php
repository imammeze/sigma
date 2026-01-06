<?php

namespace App\Filament\Resources\DiseminasiPkms\Pages;

use App\Filament\Resources\DiseminasiPkms\DiseminasiPkmResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDiseminasiPkm extends EditRecord
{
    protected static string $resource = DiseminasiPkmResource::class;

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