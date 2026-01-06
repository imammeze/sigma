<?php

namespace App\Filament\Resources\KualifikasiTendiks\Tables;

use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ColumnGroup;

class KualifikasiTendiksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_tendik')
                ->label('Jenis Tenaga Kependidikan')
                ->wrap()
                ->sortable()
                ->searchable(),

                ColumnGroup::make('Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir', [
                    TextColumn::make('s3')->label('S3')->alignCenter(),
                    TextColumn::make('s2')->label('S2')->alignCenter(),
                    TextColumn::make('s1')->label('S1')->alignCenter(),
                    TextColumn::make('d4')->label('D4')->alignCenter(),
                    TextColumn::make('d3')->label('D3')->alignCenter(),
                    TextColumn::make('d2')->label('D2')->alignCenter(),
                    TextColumn::make('d1')->label('D1')->alignCenter(),
                    TextColumn::make('sma')->label('SMA/SMK/MA')->alignCenter(),
                ]),

                TextColumn::make('unit_kerja')
                    ->label('Unit Kerja')
                    ->wrap()
                    ->searchable(),

                TextColumn::make('ijazah_files')
                    ->label('Jml. File')
                    ->getStateUsing(fn ($record) => is_array($record->ijazah_files) ? count($record->ijazah_files) : 0),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                 Action::make('files')
                    ->label('Lihat File')
                    ->icon('heroicon-o-paper-clip')
                    ->visible(fn ($record) => is_array($record->ijazah_files) && count($record->ijazah_files))
                    ->modalHeading('Ijazah / Sertifikat')
                    ->modalContent(function ($record) {
                        $html = '<div class="space-y-2">';
                        foreach ($record->ijazah_files as $path) {
                            $url  = Storage::disk('public')->url($path);
                            $name = e(basename($path));
                            $html .= "<div><a class=\"underline text-primary-600\" target=\"_blank\" href=\"{$url}\">{$name}</a></div>";
                        }
                        $html .= '</div>';
                        return str($html)->toHtmlString();
                    })
                    ->modalSubmitAction(false),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}