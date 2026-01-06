<?php

namespace App\Filament\Resources\PetaPemenuhanCpls;

use App\Filament\Resources\PetaPemenuhanCpls\Pages\CreatePetaPemenuhanCpl;
use App\Filament\Resources\PetaPemenuhanCpls\Pages\EditPetaPemenuhanCpl;
use App\Filament\Resources\PetaPemenuhanCpls\Pages\ListPetaPemenuhanCpls;
use App\Filament\Resources\PetaPemenuhanCpls\Schemas\PetaPemenuhanCplForm;
use App\Filament\Resources\PetaPemenuhanCpls\Tables\PetaPemenuhanCplsTable;
use App\Models\PetaPemenuhanCpl;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PetaPemenuhanCplResource extends Resource
{
    protected static ?string $model = PetaPemenuhanCpl::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 4;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Peta Pemenuhan CPL';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.B.3 Peta Pemenuhan CPL';

    public static function form(Schema $schema): Schema
    {
        return PetaPemenuhanCplForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PetaPemenuhanCplsTable::configure($table);
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
            'index' => ListPetaPemenuhanCpls::route('/'),
            'create' => CreatePetaPemenuhanCpl::route('/create'),
            'edit' => EditPetaPemenuhanCpl::route('/{record}/edit'),
        ];
    }
}