<?php

namespace App\Filament\Resources\Fundings\Pages;

use App\Filament\Resources\Fundings\FundingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFunding extends EditRecord
{
    protected static string $resource = FundingResource::class;

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