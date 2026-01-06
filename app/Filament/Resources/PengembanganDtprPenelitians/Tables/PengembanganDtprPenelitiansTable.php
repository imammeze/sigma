<?php

namespace App\Filament\Resources\PengembanganDtprPenelitians\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PengembanganDtprPenelitiansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_pengembangan_dtpr')
                    ->label('Jenis Pengembangan DTPR')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                TextColumn::make('nama_dtpr')
                    ->label('Nama DTPR')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tahun_akademik')
                    ->label('Tahun Akademik')
                    ->badge()
                    ->sortable()
                    ->alignCenter()
                    ->color(fn ($state) => match ($state) {
                        'TS' => 'success',
                        'TS-1' => 'info',
                        'TS-2' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('link_bukti')
                    ->label('Link Bukti')
                    ->formatStateUsing(function (?string $state) {
                        if (! $state) return '-';
                        $links = preg_split('/[\r\n]+/', trim($state));
                        $html = '';
                        foreach ($links as $link) {
                            $clean = e(trim($link));
                            if ($clean)
                                $html .= "<a href=\"{$clean}\" target=\"_blank\" rel=\"noopener\" class=\"underline text-primary-600\">{$clean}</a><br>";
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