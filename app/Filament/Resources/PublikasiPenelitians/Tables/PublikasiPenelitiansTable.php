<?php

namespace App\Filament\Resources\PublikasiPenelitians\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PublikasiPenelitiansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_dtpr')->label('Nama DTPR')->searchable()->sortable(),
                TextColumn::make('judul_penelitian')->label('Judul')->searchable()->wrap(),
                TextColumn::make('jenis_publikasi')
                    ->label('Jenis Publikasi')
                    ->badge()
                    ->color(fn ($s) => match ($s) {
                        'Internasional Bereputasi' => 'success',
                        'Internasional Tidak Bereputasi' => 'info',
                        'Jurnal Sinta 1','Jurnal Sinta 2' => 'success',
                        'Jurnal Sinta 3' => 'success',
                        'Jurnal Sinta 4' => 'warning',
                        'Jurnal Sinta 5' => 'warning',
                        'Tidak Terakreditasi' => 'gray',
                        default => 'gray',
                    }),
                TextColumn::make('tahun_terbit')->label('Tahun')->badge(),
                TextColumn::make('link_bukti')
                    ->label('Link Bukti')
                    ->formatStateUsing(function (?string $state) {
                        if (! $state) return '-';
                        $parts = preg_split('/[\r\n]+/', trim($state));
                        $html = '';
                        foreach ($parts as $u) {
                            $u = e(trim($u));
                            if ($u !== '') {
                                $html .= "<a href=\"{$u}\" target=\"_blank\" rel=\"noopener\" class=\"underline text-primary-600\">{$u}</a><br>";
                            }
                        }
                        return str($html)->toHtmlString();
                    })
                    ->html(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}