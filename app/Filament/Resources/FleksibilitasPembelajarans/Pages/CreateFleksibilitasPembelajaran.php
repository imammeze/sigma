<?php

namespace App\Filament\Resources\FleksibilitasPembelajarans\Pages;

use App\Filament\Resources\FleksibilitasPembelajarans\FleksibilitasPembelajaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFleksibilitasPembelajaran extends CreateRecord
{
    protected static string $resource = FleksibilitasPembelajaranResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); 
    }
}