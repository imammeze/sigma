<?php

namespace App\Filament\Resources\SistemTataKelolas;

use App\Filament\Resources\SistemTataKelolas\Pages\CreateSistemTataKelola;
use App\Filament\Resources\SistemTataKelolas\Pages\EditSistemTataKelola;
use App\Filament\Resources\SistemTataKelolas\Pages\ListSistemTataKelolas;
use App\Filament\Resources\SistemTataKelolas\Schemas\SistemTataKelolaForm;
use App\Filament\Resources\SistemTataKelolas\Tables\SistemTataKelolasTable;
use App\Models\SistemTataKelola;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SistemTataKelolaResource extends Resource
{
    protected static ?string $model = SistemTataKelola::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static \UnitEnum|string|null $navigationGroup = '5. Akuntabilitas';

    protected static ?string $navigationLabel = 'Sistem Tata Kelola';
    
    protected static ?string $pluralModelLabel = 'Tabel 5.1 Sistem Tata Kelola';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return SistemTataKelolaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SistemTataKelolasTable::configure($table);
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
            'index' => ListSistemTataKelolas::route('/'),
            'create' => CreateSistemTataKelola::route('/create'),
            'edit' => EditSistemTataKelola::route('/{record}/edit'),
        ];
    }
}