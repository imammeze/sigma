<?php

namespace App\Filament\Resources\VisiMisis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class VisiMisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kategori')
                ->label('Kategori')
                ->options([
                    'pt'    => 'PT',
                    'upps' => 'UPPS',
                    'keilmuan_ps' => 'Keilmuan PS',
                ])
                ->required(),
                
                Textarea::make('visi')
                ->label('Visi')
                ->rows(5)
                ->placeholder('Tulis visi di sini...')
                ->columnSpanFull(),

            RichEditor::make('misi')
                ->label('Misi')
                ->toolbarButtons([
                    'bold', 'italic', 'underline', 'strike',
                    'h2', 'h3',
                    'bulletList', 'orderedList',
                    'blockquote', 'codeBlock',
                    'link', 'undo', 'redo',
                ])
                ->placeholder('Tulis misi di sini...')
                ->columnSpanFull(),
            ]);
    }
}