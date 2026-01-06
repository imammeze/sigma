<?php

namespace App\Filament\Resources\KondisiMahasiswas\Pages;

use App\Filament\Resources\KondisiMahasiswas\KondisiMahasiswaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKondisiMahasiswa extends CreateRecord
{
    protected static string $resource = KondisiMahasiswaResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}