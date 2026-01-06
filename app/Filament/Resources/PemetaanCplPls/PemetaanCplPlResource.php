<?php

namespace App\Filament\Resources\PemetaanCplPls;

use App\Filament\Resources\PemetaanCplPls\Pages\CreatePemetaanCplPl;
use App\Filament\Resources\PemetaanCplPls\Pages\EditPemetaanCplPl;
use App\Filament\Resources\PemetaanCplPls\Pages\ListPemetaanCplPls;
use App\Filament\Resources\PemetaanCplPls\Schemas\PemetaanCplPlForm;
use App\Filament\Resources\PemetaanCplPls\Tables\PemetaanCplPlsTable;
use App\Models\PemetaanCplPl;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PemetaanCplPlResource extends Resource
{
    protected static ?string $model = PemetaanCplPl::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 3;

      protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Pemetaan CPL dan PL';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.B.2 Pemetaan Capaian Pembelajaran Lulusan dan Profil Lulusan';

    public static function form(Schema $schema): Schema
    {
        return PemetaanCplPlForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PemetaanCplPlsTable::configure($table);
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
            'index' => ListPemetaanCplPls::route('/'),
            'create' => CreatePemetaanCplPl::route('/create'),
            'edit' => EditPemetaanCplPl::route('/{record}/edit'),
        ];
    }
}