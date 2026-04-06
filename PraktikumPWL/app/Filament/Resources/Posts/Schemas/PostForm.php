<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;

class PostForm
{
    public static function configure(Schema $schema): Schema
{
    return $schema
        ->components([

            // LEFT SIDE (2/3)
            Section::make('Post Details')
                ->icon('heroicon-o-document-text')
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->minLength(5),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),

                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->searchable(),

                    ColorPicker::make('color'),

                    MarkdownEditor::make('content')
                    ->columnSpanFull(),
                ])
                ->columns(2)
                ->columnSpan(8),

            // RIGHT SIDE (1/3)
            Group::make([

                Section::make('Image')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        FileUpload::make('image')
                            ->disk('public')
                            ->directory('post'),
                    ]),

                Section::make('Meta')
                    ->icon('heroicon-o-cog')
                    ->schema([
                        TagsInput::make('tags'),
                        Checkbox::make('published'),
                        DateTimePicker::make('published_at'),
                    ]),

            ])->columnSpan(4),

        ])
        ->columns(12);
    }
}

