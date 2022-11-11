<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BOMResource\Pages;
use App\Filament\Resources\BOMResource\RelationManagers;
use App\Models\BOM;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BOMResource extends Resource
{
    protected static ?string $model = BOM::class;

    protected static ?string $pluralModelLabel = 'BOM';

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_product')
                    ->label('Product')
                    ->options(Product::all()->pluck('name', 'id')->toArray())->required(),
                Select::make('level')
                    ->options([
                        '0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                    ])->required(),
                Forms\Components\TextInput::make('item')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('unit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('moq')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')
                    ->label('Product'),
                Tables\Columns\TextColumn::make('level'),
                Tables\Columns\TextColumn::make('item'),
                Tables\Columns\TextColumn::make('quantity'),
                Tables\Columns\TextColumn::make('unit'),
                Tables\Columns\TextColumn::make('moq')
                    ->label('MOQ'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBOMS::route('/'),
            'create' => Pages\CreateBOM::route('/create'),
            'edit' => Pages\EditBOM::route('/{record}/edit'),
        ];
    }
}
