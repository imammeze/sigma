<?php

namespace App\Filament\Resources\RerataBebanDtprs;

use App\Filament\Resources\RerataBebanDtprs\Pages\CreateRerataBebanDtpr;
use App\Filament\Resources\RerataBebanDtprs\Pages\EditRerataBebanDtpr;
use App\Filament\Resources\RerataBebanDtprs\Pages\ListRerataBebanDtprs;
use App\Filament\Resources\RerataBebanDtprs\Schemas\RerataBebanDtprForm;
use App\Filament\Resources\RerataBebanDtprs\Tables\RerataBebanDtprsTable;
use App\Models\RerataBebanDtpr;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RerataBebanDtprResource extends Resource
{
    protected static ?string $model = RerataBebanDtpr::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    
    protected static ?int $navigationSort = 4;

    protected static \UnitEnum|string|null $navigationGroup = '1. Budaya Mutu';
    
    protected static ?string $navigationLabel = 'Rerata Beban DTPR';

    protected static ?string $pluralModelLabel = 'Tabel 1.A.4 Rata-rata Beban DTPR per semester (EWMP) pada TS';

    public static function form(Schema $schema): Schema
    {
        return RerataBebanDtprForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RerataBebanDtprsTable::configure($table);
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
            'index' => ListRerataBebanDtprs::route('/'),
            'create' => CreateRerataBebanDtpr::route('/create'),
            'edit' => EditRerataBebanDtpr::route('/{record}/edit'),
        ];
    }
}