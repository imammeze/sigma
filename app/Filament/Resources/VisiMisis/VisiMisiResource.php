<?php

namespace App\Filament\Resources\VisiMisis;

use App\Filament\Resources\VisiMisis\Pages\CreateVisiMisi;
use App\Filament\Resources\VisiMisis\Pages\EditVisiMisi;
use App\Filament\Resources\VisiMisis\Pages\ListVisiMisis;
use App\Filament\Resources\VisiMisis\Pages\ViewVisiMisi;
use App\Filament\Resources\VisiMisis\Schemas\VisiMisiForm;
use App\Filament\Resources\VisiMisis\Schemas\VisiMisiInfolist;
use App\Filament\Resources\VisiMisis\Tables\VisiMisisTable;
use App\Models\VisiMisi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static \UnitEnum|string|null $navigationGroup = '6. Diferensiasi Misi';

    protected static ?int $navigationSort = 6;
    
    protected static ?string $navigationLabel = 'Kesesuaian Visi dan Misi';

    protected static ?string $pluralModelLabel = 'Tabel 6 Kesesuaian Visi dan Misi';

    public static function form(Schema $schema): Schema
    {
        return VisiMisiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VisiMisiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VisiMisisTable::configure($table);
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
            'index' => ListVisiMisis::route('/'),
            'create' => CreateVisiMisi::route('/create'),
            'view' => ViewVisiMisi::route('/{record}'),
            'edit' => EditVisiMisi::route('/{record}/edit'),
        ];
    }
}