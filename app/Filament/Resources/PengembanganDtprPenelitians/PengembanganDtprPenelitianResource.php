<?php

namespace App\Filament\Resources\PengembanganDtprPenelitians;

use App\Filament\Resources\PengembanganDtprPenelitians\Pages\CreatePengembanganDtprPenelitian;
use App\Filament\Resources\PengembanganDtprPenelitians\Pages\EditPengembanganDtprPenelitian;
use App\Filament\Resources\PengembanganDtprPenelitians\Pages\ListPengembanganDtprPenelitians;
use App\Filament\Resources\PengembanganDtprPenelitians\Schemas\PengembanganDtprPenelitianForm;
use App\Filament\Resources\PengembanganDtprPenelitians\Tables\PengembanganDtprPenelitiansTable;
use App\Models\PengembanganDtprPenelitian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PengembanganDtprPenelitianResource extends Resource
{
    protected static ?string $model = PengembanganDtprPenelitian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 3;
    
    protected static \UnitEnum|string|null $navigationGroup = '3. Relevansi Penelitian';
    
    protected static ?string $navigationLabel = 'Pengembangan DTPR Penelitian';

    protected static ?string $pluralModelLabel = 'Tabel 3.A.3 Pengembangan DTPR di Bidang Penelitian';

    public static function form(Schema $schema): Schema
    {
        return PengembanganDtprPenelitianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengembanganDtprPenelitiansTable::configure($table);
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
            'index' => ListPengembanganDtprPenelitians::route('/'),
            'create' => CreatePengembanganDtprPenelitian::route('/create'),
            'edit' => EditPengembanganDtprPenelitian::route('/{record}/edit'),
        ];
    }
}