<?php

namespace App\Filament\Resources\IsiPembelajarans;

use App\Filament\Resources\IsiPembelajarans\Pages\CreateIsiPembelajaran;
use App\Filament\Resources\IsiPembelajarans\Pages\EditIsiPembelajaran;
use App\Filament\Resources\IsiPembelajarans\Pages\ListIsiPembelajarans;
use App\Filament\Resources\IsiPembelajarans\Schemas\IsiPembelajaranForm;
use App\Filament\Resources\IsiPembelajarans\Tables\IsiPembelajaransTable;
use App\Models\IsiPembelajaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IsiPembelajaranResource extends Resource
{
    protected static ?string $model = IsiPembelajaran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 2;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Isi Pembelajaran';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.B.1 Tabel Isi Pembelajaran';

    public static function form(Schema $schema): Schema
    {
        return IsiPembelajaranForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IsiPembelajaransTable::configure($table);
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
            'index' => ListIsiPembelajarans::route('/'),
            'create' => CreateIsiPembelajaran::route('/create'),
            'edit' => EditIsiPembelajaran::route('/{record}/edit'),
        ];
    }
}