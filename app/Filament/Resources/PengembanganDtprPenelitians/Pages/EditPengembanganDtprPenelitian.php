<?php

namespace App\Filament\Resources\PengembanganDtprPenelitians\Pages;

use App\Filament\Resources\PengembanganDtprPenelitians\PengembanganDtprPenelitianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPengembanganDtprPenelitian extends EditRecord
{
    protected static string $resource = PengembanganDtprPenelitianResource::class;

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