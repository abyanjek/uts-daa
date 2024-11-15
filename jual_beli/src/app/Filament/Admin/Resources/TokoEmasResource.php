<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TokoEmasResource\Pages;
use App\Filament\Admin\Resources\TokoEmasResource\RelationManagers;
use App\Models\TokoEmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokoEmasResource extends Resource
{
    protected static ?string $model = TokoEmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Tipe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Berat(gram)')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Harga')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Tipe')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Berat(gram)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Harga')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => 'Rp' . number_format($state,0,',','.')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTokoEmas::route('/'),
            'create' => Pages\CreateTokoEmas::route('/create'),
            'edit' => Pages\EditTokoEmas::route('/{record}/edit'),
        ];
    }
}
