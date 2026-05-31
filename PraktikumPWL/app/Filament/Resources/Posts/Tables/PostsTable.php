<?php

namespace App\Filament\Resources\Posts\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ReplicateAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\Action;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('title')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                TextColumn::make('slug')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                ColorColumn::make('color')
                    //->toggleable(),
                    ->toggleable(isToggledHiddenByDefault: true),

                ImageColumn::make('image')
                    ->toggleable()
                    ->disk('public'),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->toggleable()
                    ->sortable(),

                TextColumn::make('tags')
                    ->label('Tags')
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('published')
                    ->boolean()
                    ->toggleable()
                    ->label('Published'),
            ])

            ->filters([
                Filter::make('created_at')
                    ->label('Creation Date')
                    ->schema([
                        DatePicker::make('created_at')
                            ->label('Select Date'),
                    ])
                    ->query(function ($query, $data) {
                        return $query->when(
                            $data['created_at'],
                            fn ($query, $date) => $query->whereDate('created_at', $date)
                        );
                    }),

                SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->preload(),
            ])

            ->recordActions([
                EditAction::make()
                ->icon('heroicon-o-pencil'),
                DeleteAction::make()
                ->icon('heroicon-o-trash'),
                ReplicateAction::make(),
                Action::make('status')
                    ->label('Status Change')
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->schema([
                        Checkbox::make('published')
                        ->default(fn($record): bool => $record->published),
                    ])
                    ->action(function ($record, $data) {
                        $record->update(['published' => $data['published']]);
                    })
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
