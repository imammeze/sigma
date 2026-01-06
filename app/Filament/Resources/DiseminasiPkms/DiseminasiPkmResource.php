<?php

namespace App\Filament\Resources\DiseminasiPkms;

use App\Filament\Resources\DiseminasiPkms\Pages\CreateDiseminasiPkm;
use App\Filament\Resources\DiseminasiPkms\Pages\EditDiseminasiPkm;
use App\Filament\Resources\DiseminasiPkms\Pages\ListDiseminasiPkms;
use App\Filament\Resources\DiseminasiPkms\Schemas\DiseminasiPkmForm;
use App\Filament\Resources\DiseminasiPkms\Tables\DiseminasiPkmsTable;
use App\Models\DiseminasiPkm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DiseminasiPkmResource extends Resource
{
    protected static ?string $model = DiseminasiPkm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 4 ;
    
    protected static \UnitEnum|string|null $navigationGroup = '4. Relevansi PKM';
    
    protected static ?string $navigationLabel = 'Diseminasi Hasil PKM';

    protected static ?string $pluralModelLabel = 'Tabel 4.C.2 Diseminasi Hasil PKM';

    public static function form(Schema $schema): Schema
    {
        return DiseminasiPkmForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DiseminasiPkmsTable::configure($table);
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
            'index' => ListDiseminasiPkms::route('/'),
            'create' => CreateDiseminasiPkm::route('/create'),
            'edit' => EditDiseminasiPkm::route('/{record}/edit'),
        ];
    }
}