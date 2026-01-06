<?php

namespace App\Filament\Resources\RerataMasaTungguLuluses;

use App\Filament\Resources\RerataMasaTungguLuluses\Pages\CreateRerataMasaTungguLulus;
use App\Filament\Resources\RerataMasaTungguLuluses\Pages\EditRerataMasaTungguLulus;
use App\Filament\Resources\RerataMasaTungguLuluses\Pages\ListRerataMasaTungguLuluses;
use App\Filament\Resources\RerataMasaTungguLuluses\Schemas\RerataMasaTungguLulusForm;
use App\Filament\Resources\RerataMasaTungguLuluses\Tables\RerataMasaTungguLulusesTable;
use App\Models\RerataMasaTungguLulus;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RerataMasaTungguLulusResource extends Resource
{
    protected static ?string $model = RerataMasaTungguLulus::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 5;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Rerata Masa Tunggu Lulus';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.B.4 Rata-rata Masa Tunggu Lulusan untuk Bekerja Pertama Kali';

    public static function form(Schema $schema): Schema
    {
        return RerataMasaTungguLulusForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RerataMasaTungguLulusesTable::configure($table);
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
            'index' => ListRerataMasaTungguLuluses::route('/'),
            'create' => CreateRerataMasaTungguLulus::route('/create'),
            'edit' => EditRerataMasaTungguLulus::route('/{record}/edit'),
        ];
    }
}