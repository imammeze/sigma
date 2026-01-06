<?php

namespace App\Filament\Resources\KesesuaianBidangKerjas;

use App\Filament\Resources\KesesuaianBidangKerjas\Pages\CreateKesesuaianBidangKerja;
use App\Filament\Resources\KesesuaianBidangKerjas\Pages\EditKesesuaianBidangKerja;
use App\Filament\Resources\KesesuaianBidangKerjas\Pages\ListKesesuaianBidangKerjas;
use App\Filament\Resources\KesesuaianBidangKerjas\Schemas\KesesuaianBidangKerjaForm;
use App\Filament\Resources\KesesuaianBidangKerjas\Tables\KesesuaianBidangKerjasTable;
use App\Models\KesesuaianBidangKerja;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KesesuaianBidangKerjaResource extends Resource
{
    protected static ?string $model = KesesuaianBidangKerja::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

        protected static ?int $navigationSort = 6;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Kesesuaian Bidang Kerja Lulusan';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.B.5. Kesesuaian Bidang Kerja Lulusan';

    public static function form(Schema $schema): Schema
    {
        return KesesuaianBidangKerjaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KesesuaianBidangKerjasTable::configure($table);
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
            'index' => ListKesesuaianBidangKerjas::route('/'),
            'create' => CreateKesesuaianBidangKerja::route('/create'),
            'edit' => EditKesesuaianBidangKerja::route('/{record}/edit'),
        ];
    }
}