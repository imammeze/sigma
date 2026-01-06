<?php

namespace App\Filament\Resources\PenggunaanDanas;

use App\Filament\Resources\PenggunaanDanas\Pages\CreatePenggunaanDana;
use App\Filament\Resources\PenggunaanDanas\Pages\EditPenggunaanDana;
use App\Filament\Resources\PenggunaanDanas\Pages\ListPenggunaanDanas;
use App\Filament\Resources\PenggunaanDanas\Schemas\PenggunaanDanaForm;
use App\Filament\Resources\PenggunaanDanas\Tables\PenggunaanDanasTable;
use App\Models\PenggunaanDana;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenggunaanDanaResource extends Resource
{
    protected static ?string $model = PenggunaanDana::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 3;

    protected static \UnitEnum|string|null $navigationGroup = '1. Budaya Mutu';
    
    protected static ?string $navigationLabel = 'Penggunaan Dana';

    protected static ?string $pluralModelLabel = 'Tabel 1.A.3 Penggunaan Dana UPPS/PS';

    public static function form(Schema $schema): Schema
    {
        return PenggunaanDanaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenggunaanDanasTable::configure($table);
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
            'index' => ListPenggunaanDanas::route('/'),
            'create' => CreatePenggunaanDana::route('/create'),
            'edit' => EditPenggunaanDana::route('/{record}/edit'),
        ];
    }
}