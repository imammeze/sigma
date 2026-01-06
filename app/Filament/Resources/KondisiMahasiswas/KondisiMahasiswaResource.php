<?php

namespace App\Filament\Resources\KondisiMahasiswas;

use App\Filament\Resources\KondisiMahasiswas\Pages\CreateKondisiMahasiswa;
use App\Filament\Resources\KondisiMahasiswas\Pages\EditKondisiMahasiswa;
use App\Filament\Resources\KondisiMahasiswas\Pages\ListKondisiMahasiswas;
use App\Filament\Resources\KondisiMahasiswas\Schemas\KondisiMahasiswaForm;
use App\Filament\Resources\KondisiMahasiswas\Tables\KondisiMahasiswasTable;
use App\Models\KondisiMahasiswa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KondisiMahasiswaResource extends Resource
{
    protected static ?string $model = KondisiMahasiswa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 1;

    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';
    
    protected static ?string $navigationLabel = 'Kondisi Jumlah Mahasiswa';

    protected static ?string $pluralModelLabel = 'Tabel 2.A.3 Kondisi Jumlah Mahasiswa';

    public static function form(Schema $schema): Schema
    {
        return KondisiMahasiswaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KondisiMahasiswasTable::configure($table);
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
            'index' => ListKondisiMahasiswas::route('/'),
            'create' => CreateKondisiMahasiswa::route('/create'),
            'edit' => EditKondisiMahasiswa::route('/{record}/edit'),
        ];
    }
}