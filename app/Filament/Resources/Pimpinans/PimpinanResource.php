<?php

namespace App\Filament\Resources\Pimpinans;

use BackedEnum;
use App\Models\Pimpinan;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\Pimpinans\Pages\EditPimpinan;
use App\Filament\Resources\Pimpinans\Pages\ViewPimpinan;
use App\Filament\Resources\Pimpinans\Pages\ListPimpinans;
use App\Filament\Resources\Pimpinans\Pages\CreatePimpinan;
use App\Filament\Resources\Pimpinans\Schemas\PimpinanForm;
use App\Filament\Resources\Pimpinans\Tables\PimpinansTable;
use App\Filament\Resources\Pimpinans\Schemas\PimpinanInfolist;

class PimpinanResource extends Resource
{
    protected static ?string $model = Pimpinan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static \UnitEnum|string|null $navigationGroup = '1. Budaya Mutu';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'Pimpinan';

    protected static ?string $modelLabel = 'Data Pimpinan';

    protected static ?string $pluralModelLabel = 'Tabel 1.A.1 Pimpinan dan Tupoksi UPPS dan PS';
    
    public static function getNavigationLabel(): string
    {
        return 'Pimpinan dan Tupoksi'; 
    }

    public static function form(Schema $schema): Schema
    {
        return PimpinanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PimpinanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PimpinansTable::configure($table);
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
            'index' => ListPimpinans::route('/'),
            'create' => CreatePimpinan::route('/create'),
            'view' => ViewPimpinan::route('/{record}'),
            'edit' => EditPimpinan::route('/{record}/edit'),
        ];
    }
}