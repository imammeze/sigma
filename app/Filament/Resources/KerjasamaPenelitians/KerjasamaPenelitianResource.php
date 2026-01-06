<?php

namespace App\Filament\Resources\KerjasamaPenelitians;

use App\Filament\Resources\KerjasamaPenelitians\Pages\CreateKerjasamaPenelitian;
use App\Filament\Resources\KerjasamaPenelitians\Pages\EditKerjasamaPenelitian;
use App\Filament\Resources\KerjasamaPenelitians\Pages\ListKerjasamaPenelitians;
use App\Filament\Resources\KerjasamaPenelitians\Schemas\KerjasamaPenelitianForm;
use App\Filament\Resources\KerjasamaPenelitians\Tables\KerjasamaPenelitiansTable;
use App\Models\KerjasamaPenelitian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KerjasamaPenelitianResource extends Resource
{
    protected static ?string $model = KerjasamaPenelitian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 4;
    
    protected static \UnitEnum|string|null $navigationGroup = '3. Relevansi Penelitian';
    
    protected static ?string $navigationLabel = 'Kerjasama Penelitian';

    protected static ?string $pluralModelLabel = 'Tabel 3.C.1 Kerjasama Penelitian';

    public static function form(Schema $schema): Schema
    {
        return KerjasamaPenelitianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KerjasamaPenelitiansTable::configure($table);
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
            'index' => ListKerjasamaPenelitians::route('/'),
            'create' => CreateKerjasamaPenelitian::route('/create'),
            'edit' => EditKerjasamaPenelitian::route('/{record}/edit'),
        ];
    }
}