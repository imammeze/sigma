<?php

namespace App\Filament\Resources\PengembanganDtprPenelitians\Pages;

use App\Filament\Resources\PengembanganDtprPenelitians\PengembanganDtprPenelitianResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePengembanganDtprPenelitian extends CreateRecord
{
    protected static string $resource = PengembanganDtprPenelitianResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}