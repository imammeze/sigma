<?php

namespace App\Filament\Resources\FleksibilitasPembelajarans;

use App\Filament\Resources\FleksibilitasPembelajarans\Pages\CreateFleksibilitasPembelajaran;
use App\Filament\Resources\FleksibilitasPembelajarans\Pages\EditFleksibilitasPembelajaran;
use App\Filament\Resources\FleksibilitasPembelajarans\Pages\ListFleksibilitasPembelajarans;
use App\Filament\Resources\FleksibilitasPembelajarans\Schemas\FleksibilitasPembelajaranForm;
use App\Filament\Resources\FleksibilitasPembelajarans\Tables\FleksibilitasPembelajaransTable;
use App\Models\FleksibilitasPembelajaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FleksibilitasPembelajaranResource extends Resource
{
    protected static ?string $model = FleksibilitasPembelajaran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 8;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Fleksibilitas Pembelajaran';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.C Fleksibilitas Dalam Proses Pembelajaran';

    public static function form(Schema $schema): Schema
    {
        return FleksibilitasPembelajaranForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FleksibilitasPembelajaransTable::configure($table);
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
            'index' => ListFleksibilitasPembelajarans::route('/'),
            'create' => CreateFleksibilitasPembelajaran::route('/create'),
            'edit' => EditFleksibilitasPembelajaran::route('/{record}/edit'),
        ];
    }
}