<?php

namespace App\Filament\Resources\SaranaPrasaranas;

use App\Filament\Resources\SaranaPrasaranas\Pages\CreateSaranaPrasarana;
use App\Filament\Resources\SaranaPrasaranas\Pages\EditSaranaPrasarana;
use App\Filament\Resources\SaranaPrasaranas\Pages\ListSaranaPrasaranas;
use App\Filament\Resources\SaranaPrasaranas\Pages\ViewSaranaPrasarana;
use App\Filament\Resources\SaranaPrasaranas\Schemas\SaranaPrasaranaForm;
use App\Filament\Resources\SaranaPrasaranas\Schemas\SaranaPrasaranaInfolist;
use App\Filament\Resources\SaranaPrasaranas\Tables\SaranaPrasaranasTable;
use App\Models\SaranaPrasarana;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SaranaPrasaranaResource extends Resource
{
    protected static ?string $model = SaranaPrasarana::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static \UnitEnum|string|null $navigationGroup = '5. Akuntabilitas';

    protected static ?string $navigationLabel = 'Sarana dan Prasarana';

    protected static ?string $pluralModelLabel = 'Tabel 5.2 Sarana dan Prasarana Pendidikan';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return SaranaPrasaranaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SaranaPrasaranaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SaranaPrasaranasTable::configure($table);
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
            'index' => ListSaranaPrasaranas::route('/'),
            'create' => CreateSaranaPrasarana::route('/create'),
            'view' => ViewSaranaPrasarana::route('/{record}'),
            'edit' => EditSaranaPrasarana::route('/{record}/edit'),
        ];
    }
}