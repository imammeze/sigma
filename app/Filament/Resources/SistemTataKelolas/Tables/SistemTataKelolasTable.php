<?php

namespace App\Filament\Resources\SistemTataKelolas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class SistemTataKelolasTable
{
    public static function configure(Table $table): Table
    {
        $renderLinks = function (?string $text) {
            if (! $text) return '-';
            $parts = preg_split('/[\r\n]+/', trim($text), -1, PREG_SPLIT_NO_EMPTY) ?: [];
            if (! count($parts)) return '-';
            $html = '<div class="space-y-1">';
            foreach ($parts as $p) {
                $url = trim($p);
                $esc = e($url);
                $html .= "<div><a class=\"underline text-primary-600\" target=\"_blank\" href=\"{$esc}\">{$esc}</a></div>";
            }
            $html .= '</div>';
            return str($html)->toHtmlString();
        };
        
        return $table
            ->columns([
                TextColumn::make('jenis_tata_kelola')
                    ->label('Jenis Tata Kelola')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nama_sistem_informasi')
                    ->label('Nama Sistem Informasi')
                    ->wrap()
                    ->searchable(),

                TextColumn::make('akses')
                    ->label('Akses')
                    ->badge()
                    ->color(fn ($state) => $state === 'Internet' ? 'success' : 'warning')
                    ->sortable(),

                TextColumn::make('unit_kerja')
                    ->label('Unit Kerja')
                    ->searchable(),

                TextColumn::make('link_bukti')
                    ->label('Link Bukti')
                    ->formatStateUsing(fn ($state) => $renderLinks($state))
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