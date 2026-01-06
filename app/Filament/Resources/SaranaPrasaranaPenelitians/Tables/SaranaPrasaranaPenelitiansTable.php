<?php

namespace App\Filament\Resources\SaranaPrasaranaPenelitians\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;

class SaranaPrasaranaPenelitiansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_prasarana')
                    ->label('Nama Prasarana')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                ColumnGroup::make('Kapasitas & Luas', [
                    TextColumn::make('daya_tampung')->label('Daya')->alignCenter(),
                    TextColumn::make('luas_ruang')->label('Luas (m²)')->alignCenter(),
                ]),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($s) => $s === 'milik' ? 'success' : 'warning')
                    ->formatStateUsing(fn ($s) => $s === 'milik' ? 'Milik Sendiri' : 'Sewa')
                    ->sortable(),

                TextColumn::make('lisensi')
                    ->label('Lisensi')
                    ->badge()
                    ->formatStateUsing(function ($state) {
                            if (! $state) return '-';

                            // Normalisasi: lowercase + ganti spasi jadi underscore
                            $norm = str($state)->lower()->replace(' ', '_')->value();

                            return match ($norm) {
                                'berlisensi'        => 'Berlisensi',
                                'public_domain'     => 'Public Domain',
                                'tidak_berlisensi'  => 'Tidak Berlisensi',
                                default             => $state, // tampilkan apa adanya kalau tidak dikenal
                            };
                        })
                    ->color(function ($state) {
                        if (! $state) return 'gray';

                        $norm = str($state)->lower()->replace(' ', '_')->value();

                        return match ($norm) {
                            'berlisensi'        => 'success',
                            'public_domain'     => 'info',
                            'tidak_berlisensi'  => 'danger',
                            default             => 'gray',
                        };
                    }),

                TextColumn::make('perangkat')
                    ->label('Perangkat')
                    ->formatStateUsing(fn ($state) => $state ? str(strip_tags($state))->limit(120) : '-')
                    ->wrap(),

                TextColumn::make('bukti_file')
                    ->label('Bukti')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat Dokumen' : '-')
                    ->url(fn ($state) => $state ? asset('storage/'.ltrim($state, '/')) : null)
                    ->openUrlInNewTab(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}