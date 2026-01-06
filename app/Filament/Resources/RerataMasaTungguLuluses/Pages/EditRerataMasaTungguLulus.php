<?php

namespace App\Filament\Resources\RerataMasaTungguLuluses\Pages;

use App\Filament\Resources\RerataMasaTungguLuluses\RerataMasaTungguLulusResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRerataMasaTungguLulus extends EditRecord
{
    protected static string $resource = RerataMasaTungguLulusResource::class;
    
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