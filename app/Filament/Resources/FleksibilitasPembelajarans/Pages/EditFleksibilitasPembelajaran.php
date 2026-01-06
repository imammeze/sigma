<?php

namespace App\Filament\Resources\FleksibilitasPembelajarans\Pages;

use App\Filament\Resources\FleksibilitasPembelajarans\FleksibilitasPembelajaranResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFleksibilitasPembelajaran extends EditRecord
{
    protected static string $resource = FleksibilitasPembelajaranResource::class;

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