<?php

namespace App\Filament\Resources\SaranaPrasaranaPkms;

use App\Filament\Resources\SaranaPrasaranaPkms\Pages\CreateSaranaPrasaranaPkm;
use App\Filament\Resources\SaranaPrasaranaPkms\Pages\EditSaranaPrasaranaPkm;
use App\Filament\Resources\SaranaPrasaranaPkms\Pages\ListSaranaPrasaranaPkms;
use App\Filament\Resources\SaranaPrasaranaPkms\Pages\ViewSaranaPrasaranaPkm;
use App\Filament\Resources\SaranaPrasaranaPkms\Schemas\SaranaPrasaranaPkmForm;
use App\Filament\Resources\SaranaPrasaranaPkms\Schemas\SaranaPrasaranaPkmInfolist;
use App\Filament\Resources\SaranaPrasaranaPkms\Tables\SaranaPrasaranaPkmsTable;
use App\Models\SaranaPrasaranaPkm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SaranaPrasaranaPkmResource extends Resource
{
    protected static ?string $model = SaranaPrasaranaPkm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 1 ;
    
    protected static \UnitEnum|string|null $navigationGroup = '4. Relevansi PKM';
    
    protected static ?string $navigationLabel = 'Sarana dan Prasarana PkM';

    protected static ?string $pluralModelLabel = 'Tabel 4.A.1 Sarana dan Prasarana PkM';

    public static function getCreateButtonLabel(): string
    {
        return 'Tambah Data';
    }

    public static function form(Schema $schema): Schema
    {
        return SaranaPrasaranaPkmForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SaranaPrasaranaPkmInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SaranaPrasaranaPkmsTable::configure($table);
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
            'index' => ListSaranaPrasaranaPkms::route('/'),
            'create' => CreateSaranaPrasaranaPkm::route('/create'),
            'view' => ViewSaranaPrasaranaPkm::route('/{record}'),
            'edit' => EditSaranaPrasaranaPkm::route('/{record}/edit'),
        ];
    }
}