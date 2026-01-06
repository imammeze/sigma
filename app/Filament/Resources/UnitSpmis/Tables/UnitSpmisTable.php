<?php

namespace App\Filament\Resources\UnitSpmis\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColumnGroup;

class UnitSpmisTable
{
    public static function configure(Table $table): Table
    {
        $renderLinks = function (?string $text) {
            if (! $text) return '-';
            $parts = preg_split('/[\r\n,]+/', $text, -1, PREG_SPLIT_NO_EMPTY) ?: [];
            if (! count($parts)) return '-';
            $html = '<div class="space-y-1">';
            foreach ($parts as $p) {
                $url = trim($p);
                $esc = e($url);
                $html .= "<div><a class=\"underline text-primary-600\" href=\"{$esc}\" target=\"_blank\">{$esc}</a></div>";
            }
            $html .= '</div>';
            return str($html)->toHtmlString();
        };
        
        return $table
            ->columns([
                TextColumn::make('jenis_unit_spmi')
                    ->label('Unit SPMI')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_unit_spmi')
                    ->label('Nama Unit SPMI')
                    ->wrap()
                    ->searchable(),
                TextColumn::make('dokumen_spmi')
                    ->label('Dokumen SPMI')
                    ->formatStateUsing(fn ($state) => $renderLinks($state))
                    ->html(),
                ColumnGroup::make('Auditor / Frekuensi', [
                    TextColumn::make('jumlah_auditor')->label('Jumlah')->alignCenter(),
                    TextColumn::make('certified')->label('Certified')->alignCenter(),
                    TextColumn::make('non_certified')->label('Non')->alignCenter(),
                    TextColumn::make('frekuensi_audit')->label('Audit/Tahun')->alignCenter(),
                ]),
                TextColumn::make('bukti_certified_auditor')
                    ->label('Bukti Certified Auditor')
                    ->formatStateUsing(fn ($state) => $renderLinks($state))
                    ->html(),
                TextColumn::make('laporan_audit')
                    ->label('Laporan Audit')
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