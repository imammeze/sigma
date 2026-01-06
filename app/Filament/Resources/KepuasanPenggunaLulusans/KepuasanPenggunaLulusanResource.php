<?php

namespace App\Filament\Resources\KepuasanPenggunaLulusans;

use App\Filament\Resources\KepuasanPenggunaLulusans\Pages\CreateKepuasanPenggunaLulusan;
use App\Filament\Resources\KepuasanPenggunaLulusans\Pages\EditKepuasanPenggunaLulusan;
use App\Filament\Resources\KepuasanPenggunaLulusans\Pages\ListKepuasanPenggunaLulusans;
use App\Filament\Resources\KepuasanPenggunaLulusans\Schemas\KepuasanPenggunaLulusanForm;
use App\Filament\Resources\KepuasanPenggunaLulusans\Tables\KepuasanPenggunaLulusansTable;
use App\Models\KepuasanPenggunaLulusan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KepuasanPenggunaLulusanResource extends Resource
{
    protected static ?string $model = KepuasanPenggunaLulusan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 7;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Kepuasan Pengguna Lulusan';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.B.6. Kepuasan Pengguna Lulusan';

    public static function form(Schema $schema): Schema
    {
        return KepuasanPenggunaLulusanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KepuasanPenggunaLulusansTable::configure($table);
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
            'index' => ListKepuasanPenggunaLulusans::route('/'),
            'create' => CreateKepuasanPenggunaLulusan::route('/create'),
            'edit' => EditKepuasanPenggunaLulusan::route('/{record}/edit'),
        ];
    }
}