<?php

namespace App\Filament\Resources\RerataBebanDtprs\Pages;

use App\Filament\Resources\RerataBebanDtprs\RerataBebanDtprResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRerataBebanDtpr extends CreateRecord
{
    protected static string $resource = RerataBebanDtprResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}