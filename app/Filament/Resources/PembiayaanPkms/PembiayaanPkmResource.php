<?php

namespace App\Filament\Resources\PembiayaanPkms;

use App\Filament\Resources\PembiayaanPkms\Pages\CreatePembiayaanPkm;
use App\Filament\Resources\PembiayaanPkms\Pages\EditPembiayaanPkm;
use App\Filament\Resources\PembiayaanPkms\Pages\ListPembiayaanPkms;
use App\Filament\Resources\PembiayaanPkms\Schemas\PembiayaanPkmForm;
use App\Filament\Resources\PembiayaanPkms\Tables\PembiayaanPkmsTable;
use App\Models\PembiayaanPkm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PembiayaanPkmResource extends Resource
{
    protected static ?string $model = PembiayaanPkm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 2 ;
    
    protected static \UnitEnum|string|null $navigationGroup = '4. Relevansi PKM';
    
    protected static ?string $navigationLabel = 'PKM STPR, Hibah dan Pembiayaan PKM';

    protected static ?string $pluralModelLabel = 'Tabel 4.A.2 PKM STPR, Hibah dan Pembiayaan PKM';

    public static function form(Schema $schema): Schema
    {
        return PembiayaanPkmForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PembiayaanPkmsTable::configure($table);
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
            'index' => ListPembiayaanPkms::route('/'),
            'create' => CreatePembiayaanPkm::route('/create'),
            'edit' => EditPembiayaanPkm::route('/{record}/edit'),
        ];
    }
}