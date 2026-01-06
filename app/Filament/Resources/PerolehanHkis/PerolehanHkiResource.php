<?php

namespace App\Filament\Resources\PerolehanHkis;

use App\Filament\Resources\PerolehanHkis\Pages\CreatePerolehanHki;
use App\Filament\Resources\PerolehanHkis\Pages\EditPerolehanHki;
use App\Filament\Resources\PerolehanHkis\Pages\ListPerolehanHkis;
use App\Filament\Resources\PerolehanHkis\Schemas\PerolehanHkiForm;
use App\Filament\Resources\PerolehanHkis\Tables\PerolehanHkisTable;
use App\Models\PerolehanHki;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PerolehanHkiResource extends Resource
{
    protected static ?string $model = PerolehanHki::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 6;
    
    protected static \UnitEnum|string|null $navigationGroup = '3. Relevansi Penelitian';
    
    protected static ?string $navigationLabel = 'Perolehan HKI';

    protected static ?string $pluralModelLabel = 'Tabel 3.C.3 Perolehan HKI';


    public static function form(Schema $schema): Schema
    {
        return PerolehanHkiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PerolehanHkisTable::configure($table);
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
            'index' => ListPerolehanHkis::route('/'),
            'create' => CreatePerolehanHki::route('/create'),
            'edit' => EditPerolehanHki::route('/{record}/edit'),
        ];
    }
}