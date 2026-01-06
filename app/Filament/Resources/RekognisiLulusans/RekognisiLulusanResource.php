<?php

namespace App\Filament\Resources\RekognisiLulusans;

use App\Filament\Resources\RekognisiLulusans\Pages\CreateRekognisiLulusan;
use App\Filament\Resources\RekognisiLulusans\Pages\EditRekognisiLulusan;
use App\Filament\Resources\RekognisiLulusans\Pages\ListRekognisiLulusans;
use App\Filament\Resources\RekognisiLulusans\Schemas\RekognisiLulusanForm;
use App\Filament\Resources\RekognisiLulusans\Tables\RekognisiLulusansTable;
use App\Models\RekognisiLulusan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RekognisiLulusanResource extends Resource
{
    protected static ?string $model = RekognisiLulusan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 9;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Rekognisi Lulusan';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.D Rekognisi dan Apresiasi Kompetensi Lulusan';

    public static function form(Schema $schema): Schema
    {
        return RekognisiLulusanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RekognisiLulusansTable::configure($table);
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
            'index' => ListRekognisiLulusans::route('/'),
            'create' => CreateRekognisiLulusan::route('/create'),
            'edit' => EditRekognisiLulusan::route('/{record}/edit'),
        ];
    }
}