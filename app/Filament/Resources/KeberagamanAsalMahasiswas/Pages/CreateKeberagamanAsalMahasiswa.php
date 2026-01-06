<?php

namespace App\Filament\Resources\KeberagamanAsalMahasiswas\Pages;

use App\Filament\Resources\KeberagamanAsalMahasiswas\KeberagamanAsalMahasiswaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKeberagamanAsalMahasiswa extends CreateRecord
{
    protected static string $resource = KeberagamanAsalMahasiswaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
