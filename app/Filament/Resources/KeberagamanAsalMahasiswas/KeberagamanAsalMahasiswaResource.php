<?php

namespace App\Filament\Resources\KeberagamanAsalMahasiswas;

use App\Filament\Resources\KeberagamanAsalMahasiswas\Pages\CreateKeberagamanAsalMahasiswa;
use App\Filament\Resources\KeberagamanAsalMahasiswas\Pages\EditKeberagamanAsalMahasiswa;
use App\Filament\Resources\KeberagamanAsalMahasiswas\Pages\ListKeberagamanAsalMahasiswas;
use App\Filament\Resources\KeberagamanAsalMahasiswas\Schemas\KeberagamanAsalMahasiswaForm;
use App\Filament\Resources\KeberagamanAsalMahasiswas\Tables\KeberagamanAsalMahasiswasTable;
use App\Models\KeberagamanAsalMahasiswa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KeberagamanAsalMahasiswaResource extends Resource
{
    protected static ?string $model = KeberagamanAsalMahasiswa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';

    protected static ?string $navigationLabel = 'Keberagaman Asal Mahasiswa';
    
    protected static ?string $pluralModelLabel = 'Tabel 2.A.2 Keberagaman Asal Mahasiswa';

    public static function form(Schema $schema): Schema
    {
        return KeberagamanAsalMahasiswaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KeberagamanAsalMahasiswasTable::configure($table);
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
            'index' => ListKeberagamanAsalMahasiswas::route('/'),
            'create' => CreateKeberagamanAsalMahasiswa::route('/create'),
            'edit' => EditKeberagamanAsalMahasiswa::route('/{record}/edit'),
        ];
    }
}
