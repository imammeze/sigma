<?php

namespace App\Filament\Resources\SistemTataKelolas\Pages;

use App\Filament\Resources\SistemTataKelolas\SistemTataKelolaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSistemTataKelola extends CreateRecord
{
    protected static string $resource = SistemTataKelolaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}