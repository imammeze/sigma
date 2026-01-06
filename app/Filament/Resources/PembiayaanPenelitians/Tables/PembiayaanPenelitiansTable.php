<?php

namespace App\Filament\Resources\PembiayaanPenelitians\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PembiayaanPenelitiansTable
{
    public static function configure(Table $table): Table
    {
        $renderLinks = function(?string $text){
            if(! $text) return '-';
            $parts = preg_split('/[\r\n,]+/', trim($text), -1, PREG_SPLIT_NO_EMPTY) ?: [];
            if(! $parts) return '-';
            $html = '<div class="space-y-1">';
            foreach($parts as $u){
                $u = e(trim($u));
                $html .= "<div><a class=\"underline text-primary-600\" target=\"_blank\" href=\"{$u}\">{$u}</a></div>";
            }
            $html .= '</div>';
            return str($html)->toHtmlString();
        };
        
        return $table
            ->columns([
                TextColumn::make('nama_dtpr')->label('Nama DTPR')->searchable()->sortable(),
                TextColumn::make('judul_penelitian')->label('Judul')->wrap()->searchable(),
                TextColumn::make('jumlah_mahasiswa')->label('Mhs')->alignCenter(),
                TextColumn::make('jenis_hibah_penelitian')->label('Jenis Hibah'),
                TextColumn::make('sumber')->label('Sumber')->badge()->sortable(),
                TextColumn::make('durasi')->label('Durasi')->alignCenter(),
                TextColumn::make('ts_2')
                    ->label('TS-2')
                    ->money('IDR', locale: 'id')
                    ->alignRight()
                    ->sortable(),
                TextColumn::make('ts_1')
                    ->label('TS-1')
                    ->money('IDR', locale: 'id')
                    ->alignRight()
                    ->sortable(),
                TextColumn::make('ts')
                    ->label('TS')
                    ->money('IDR', locale: 'id')
                    ->alignRight()
                    ->sortable(),
                TextColumn::make('link_bukti')->label('Link Bukti')
                    ->formatStateUsing(fn($state)=>$renderLinks($state))->html(),
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