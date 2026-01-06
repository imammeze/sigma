<?php

namespace App\Filament\Resources\PublikasiPenelitians;

use App\Filament\Resources\PublikasiPenelitians\Pages\CreatePublikasiPenelitian;
use App\Filament\Resources\PublikasiPenelitians\Pages\EditPublikasiPenelitian;
use App\Filament\Resources\PublikasiPenelitians\Pages\ListPublikasiPenelitians;
use App\Filament\Resources\PublikasiPenelitians\Schemas\PublikasiPenelitianForm;
use App\Filament\Resources\PublikasiPenelitians\Tables\PublikasiPenelitiansTable;
use App\Models\PublikasiPenelitian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PublikasiPenelitianResource extends Resource
{
    protected static ?string $model = PublikasiPenelitian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 5;
    
    protected static \UnitEnum|string|null $navigationGroup = '3. Relevansi Penelitian';
    
    protected static ?string $navigationLabel = 'Publikasi Penelitian';

    protected static ?string $pluralModelLabel = 'Tabel 3.C.2 Publikasi Penelitian';

    public static function form(Schema $schema): Schema
    {
        return PublikasiPenelitianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PublikasiPenelitiansTable::configure($table);
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
            'index' => ListPublikasiPenelitians::route('/'),
            'create' => CreatePublikasiPenelitian::route('/create'),
            'edit' => EditPublikasiPenelitian::route('/{record}/edit'),
        ];
    }
}