<?php

namespace App\Filament\Resources\Fundings;

use App\Filament\Resources\Fundings\Pages\CreateFunding;
use App\Filament\Resources\Fundings\Pages\EditFunding;
use App\Filament\Resources\Fundings\Pages\ListFundings;
use App\Filament\Resources\Fundings\Schemas\FundingForm;
use App\Filament\Resources\Fundings\Tables\FundingsTable;
use App\Models\Funding;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FundingResource extends Resource
{
    protected static ?string $model = Funding::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static \UnitEnum|string|null $navigationGroup = '1. Budaya Mutu';

    protected static ?string $navigationLabel = 'Sumber Pendanaan';

    protected static ?string $pluralModelLabel = 'Tabel 1.A.2 Sumber Pendanaan UPPS/PS';
    
    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return FundingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FundingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFundings::route('/'),
            'create' => CreateFunding::route('/create'),
            'edit' => EditFunding::route('/{record}/edit'),
        ];
    }
}