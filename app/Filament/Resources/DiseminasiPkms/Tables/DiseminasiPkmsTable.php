<?php

namespace App\Filament\Resources\DiseminasiPkms\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\DeleteAction;

class DiseminasiPkmsTable
{
    public static function configure(Table $table): Table
    {
         $renderLinks = function (?string $text) {
            if (! $text) return '-';
            $parts = preg_split('/[\r\n,]+/', trim($text), -1, PREG_SPLIT_NO_EMPTY) ?: [];
            if (! $parts) return '-';
            $html = '<div class="space-y-1">';
            foreach ($parts as $p) {
                $u = e(trim($p));
                $html .= "<div><a class=\"underline text-primary-600\" target=\"_blank\" href=\"{$u}\">{$u}</a></div>";
            }
            $html .= '</div>';
            return str($html)->toHtmlString();
        };
        
        return $table
            ->columns([
                TextColumn::make('nama_dtpr')->label('Nama DTPR')->searchable()->sortable(),
                TextColumn::make('judul')->label('Judul')->wrap()->searchable(),
                TextColumn::make('diseminasi')->label('Diseminasi')->badge()->sortable(),
                TextColumn::make('waktu')->label('Waktu')->badge()->sortable(),
                TextColumn::make('link_bukti')
                    ->label('Link Bukti')
                    ->formatStateUsing(fn ($state) => $renderLinks($state))
                    ->html(),
            ])
            ->filters([
                SelectFilter::make('diseminasi')
                    ->options([
                        'Media Massa Elektronik Lokal'     => 'Media Massa Elektronik Lokal',
                        'Media Massa Elektronik Nasional'  => 'Media Massa Elektronik Nasional',
                        'Jurnal PKM'                       => 'Jurnal PKM',
                        'Social Media Youtube'             => 'Social Media Youtube',
                    ]),
                SelectFilter::make('waktu')
                    ->options(['TS' => 'TS', 'TS-1' => 'TS-1', 'TS-2' => 'TS-2']),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}