<?php

namespace App\Filament\Resources\RerataBebanDtprs\Pages;

use App\Filament\Resources\RerataBebanDtprs\RerataBebanDtprResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRerataBebanDtpr extends EditRecord
{
    protected static string $resource = RerataBebanDtprResource::class;

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