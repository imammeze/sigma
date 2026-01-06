<?php

namespace App\Filament\Resources\SaranaPrasaranaPenelitians;

use App\Filament\Resources\SaranaPrasaranaPenelitians\Pages\CreateSaranaPrasaranaPenelitian;
use App\Filament\Resources\SaranaPrasaranaPenelitians\Pages\EditSaranaPrasaranaPenelitian;
use App\Filament\Resources\SaranaPrasaranaPenelitians\Pages\ListSaranaPrasaranaPenelitians;
use App\Filament\Resources\SaranaPrasaranaPenelitians\Pages\ViewSaranaPrasaranaPenelitian;
use App\Filament\Resources\SaranaPrasaranaPenelitians\Schemas\SaranaPrasaranaPenelitianForm;
use App\Filament\Resources\SaranaPrasaranaPenelitians\Schemas\SaranaPrasaranaPenelitianInfolist;
use App\Filament\Resources\SaranaPrasaranaPenelitians\Tables\SaranaPrasaranaPenelitiansTable;
use App\Models\SaranaPrasaranaPenelitian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SaranaPrasaranaPenelitianResource extends Resource
{
    protected static ?string $model = SaranaPrasaranaPenelitian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 1 ;
    
    protected static \UnitEnum|string|null $navigationGroup = '3. Relevansi Penelitian';
    
    protected static ?string $navigationLabel = 'Sarana Prasarana Penelitian';

    protected static ?string $pluralModelLabel = 'Tabel 3.A.1 Sarana dan Prasarana Penelitian';

    public static function form(Schema $schema): Schema
    {
        return SaranaPrasaranaPenelitianForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SaranaPrasaranaPenelitianInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SaranaPrasaranaPenelitiansTable::configure($table);
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
            'index' => ListSaranaPrasaranaPenelitians::route('/'),
            'create' => CreateSaranaPrasaranaPenelitian::route('/create'),
            'view' => ViewSaranaPrasaranaPenelitian::route('/{record}'),
            'edit' => EditSaranaPrasaranaPenelitian::route('/{record}/edit'),
        ];
    }
}