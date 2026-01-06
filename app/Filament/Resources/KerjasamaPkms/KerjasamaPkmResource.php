<?php

namespace App\Filament\Resources\KerjasamaPkms;

use App\Filament\Resources\KerjasamaPkms\Pages\CreateKerjasamaPkm;
use App\Filament\Resources\KerjasamaPkms\Pages\EditKerjasamaPkm;
use App\Filament\Resources\KerjasamaPkms\Pages\ListKerjasamaPkms;
use App\Filament\Resources\KerjasamaPkms\Schemas\KerjasamaPkmForm;
use App\Filament\Resources\KerjasamaPkms\Tables\KerjasamaPkmsTable;
use App\Models\KerjasamaPkm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KerjasamaPkmResource extends Resource
{
    protected static ?string $model = KerjasamaPkm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 3 ;
    
    protected static \UnitEnum|string|null $navigationGroup = '4. Relevansi PKM';
    
    protected static ?string $navigationLabel = 'Kerjasama PKM';

    protected static ?string $pluralModelLabel = 'Tabel 4.C.1 Kerjasama PKM';


    public static function form(Schema $schema): Schema
    {
        return KerjasamaPkmForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KerjasamaPkmsTable::configure($table);
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
            'index' => ListKerjasamaPkms::route('/'),
            'create' => CreateKerjasamaPkm::route('/create'),
            'edit' => EditKerjasamaPkm::route('/{record}/edit'),
        ];
    }
}