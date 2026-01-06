<?php

namespace App\Filament\Resources\KualifikasiTendiks;

use App\Filament\Resources\KualifikasiTendiks\Pages\CreateKualifikasiTendik;
use App\Filament\Resources\KualifikasiTendiks\Pages\EditKualifikasiTendik;
use App\Filament\Resources\KualifikasiTendiks\Pages\ListKualifikasiTendiks;
use App\Filament\Resources\KualifikasiTendiks\Schemas\KualifikasiTendikForm;
use App\Filament\Resources\KualifikasiTendiks\Tables\KualifikasiTendiksTable;
use App\Models\KualifikasiTendik;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KualifikasiTendikResource extends Resource
{
    protected static ?string $model = KualifikasiTendik::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = 'Kualifikasi Tenaga Kependidikan';

    protected static ?string $pluralModelLabel = 'Tabel 1.A.5 Kualifikasi Tenaga Kependidikan';

    protected static \UnitEnum|string|null $navigationGroup = '1. Budaya Mutu';

    public static function form(Schema $schema): Schema
    {
        return KualifikasiTendikForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KualifikasiTendiksTable::configure($table);
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
            'index' => ListKualifikasiTendiks::route('/'),
            'create' => CreateKualifikasiTendik::route('/create'),
            'edit' => EditKualifikasiTendik::route('/{record}/edit'),
        ];
    }
}