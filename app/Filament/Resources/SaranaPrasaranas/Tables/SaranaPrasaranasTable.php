<?php

namespace App\Filament\Resources\SaranaPrasaranas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;

class SaranaPrasaranasTable
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
                TextColumn::make('nama_prasarana')
                    ->label('Nama Prasarana')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                ColumnGroup::make('Daya & Luas', [
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
                    ->color(fn ($s) => match ($s) {
                        'berlisensi' => 'success',
                        'public_domain' => 'info',
                        'tidak_berlisensi' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn ($s) => match ($s) {
                        'berlisensi' => 'Berlisensi',
                        'public_domain' => 'Public Domain',
                        'tidak_berlisensi' => 'Tidak Berlisensi',
                        default => ucfirst((string)$s),
                    })
                    ->sortable(),

                TextColumn::make('perangkat')
                    ->label('Perangkat')
                    ->formatStateUsing(fn ($state) => $state ? str(strip_tags($state))->limit(120) : '-')
                    ->wrap(),

                TextColumn::make('link_bukti')
                    ->label('Link Bukti')
                    ->formatStateUsing(fn ($state) => $renderLinks($state))
                    ->html(),
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