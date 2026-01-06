<?php

namespace App\Filament\Resources\UnitSpmis;

use App\Filament\Resources\UnitSpmis\Pages\CreateUnitSpmi;
use App\Filament\Resources\UnitSpmis\Pages\EditUnitSpmi;
use App\Filament\Resources\UnitSpmis\Pages\ListUnitSpmis;
use App\Filament\Resources\UnitSpmis\Schemas\UnitSpmiForm;
use App\Filament\Resources\UnitSpmis\Tables\UnitSpmisTable;
use App\Models\UnitSpmi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UnitSpmiResource extends Resource
{
    protected static ?string $model = UnitSpmi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 6;

    protected static \UnitEnum|string|null $navigationGroup = '1. Budaya Mutu';
    
    protected static ?string $navigationLabel = 'Unit SPMI dan SDM';

    protected static ?string $pluralModelLabel = 'Tabel 1.B Unit SPMI dan SDM';

    public static function form(Schema $schema): Schema
    {
        return UnitSpmiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UnitSpmisTable::configure($table);
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
            'index' => ListUnitSpmis::route('/'),
            'create' => CreateUnitSpmi::route('/create'),
            'edit' => EditUnitSpmi::route('/{record}/edit'),
        ];
    }
}