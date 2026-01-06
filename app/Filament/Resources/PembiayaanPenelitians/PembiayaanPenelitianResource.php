<?php

namespace App\Filament\Resources\PembiayaanPenelitians;

use App\Filament\Resources\PembiayaanPenelitians\Pages\CreatePembiayaanPenelitian;
use App\Filament\Resources\PembiayaanPenelitians\Pages\EditPembiayaanPenelitian;
use App\Filament\Resources\PembiayaanPenelitians\Pages\ListPembiayaanPenelitians;
use App\Filament\Resources\PembiayaanPenelitians\Schemas\PembiayaanPenelitianForm;
use App\Filament\Resources\PembiayaanPenelitians\Tables\PembiayaanPenelitiansTable;
use App\Models\PembiayaanPenelitian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PembiayaanPenelitianResource extends Resource
{
    protected static ?string $model = PembiayaanPenelitian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 2;
    
    protected static \UnitEnum|string|null $navigationGroup = '3. Relevansi Penelitian';
    
    protected static ?string $navigationLabel = 'Penelitian DTPR, Hibah dan Pembiayaan Penelitian';

    protected static ?string $pluralModelLabel = 'Tabel 3.A.2 Penelitian DTPR, Hibah dan Pembiayaan Penelitian';

    public static function form(Schema $schema): Schema
    {
        return PembiayaanPenelitianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PembiayaanPenelitiansTable::configure($table);
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
            'index' => ListPembiayaanPenelitians::route('/'),
            'create' => CreatePembiayaanPenelitian::route('/create'),
            'edit' => EditPembiayaanPenelitian::route('/{record}/edit'),
        ];
    }
}