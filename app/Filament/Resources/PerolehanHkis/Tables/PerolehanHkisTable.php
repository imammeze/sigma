<?php

namespace App\Filament\Resources\PerolehanHkis\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PerolehanHkisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('jenis_hki')
                    ->label('Jenis HKI')
                    ->badge()
                    ->color('success'),

                TextColumn::make('tahun_terbit')
                    ->label('Tahun')
                    ->badge(),

                TextColumn::make('tanggal_terbit')
                    ->label('Tanggal Terbit')
                    ->date('d M Y')
                    ->placeholder('-'),

                TextColumn::make('link_bukti')
                    ->label('Link Bukti')
                    ->formatStateUsing(function (?string $state) {
                        if (! $state) return '-';
                        $links = preg_split('/[\r\n]+/', trim($state));
                        $html = '';
                        foreach ($links as $u) {
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