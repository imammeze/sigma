<?php

namespace App\Filament\Resources\PerolehanPkms;

use App\Filament\Resources\PerolehanPkms\Pages\CreatePerolehanPkm;
use App\Filament\Resources\PerolehanPkms\Pages\EditPerolehanPkm;
use App\Filament\Resources\PerolehanPkms\Pages\ListPerolehanPkms;
use App\Filament\Resources\PerolehanPkms\Schemas\PerolehanPkmForm;
use App\Filament\Resources\PerolehanPkms\Tables\PerolehanPkmsTable;
use App\Models\PerolehanPkm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PerolehanPkmResource extends Resource
{
    protected static ?string $model = PerolehanPkm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    
    protected static ?int $navigationSort = 5;
    
    protected static \UnitEnum|string|null $navigationGroup = '4. Relevansi PKM';
    
    protected static ?string $navigationLabel = 'Perolehan Hasil PKM';

    protected static ?string $pluralModelLabel = 'Tabel 4.C.3 Perolehan Hasil PKM';



    public static function form(Schema $schema): Schema
    {
        return PerolehanPkmForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PerolehanPkmsTable::configure($table);
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
            'index' => ListPerolehanPkms::route('/'),
            'create' => CreatePerolehanPkm::route('/create'),
            'edit' => EditPerolehanPkm::route('/{record}/edit'),
        ];
    }
}