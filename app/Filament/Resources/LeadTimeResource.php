<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadTimeResource\Pages;
use App\Filament\Resources\LeadTimeResource\RelationManagers;
use App\Models\BOM;
use App\Models\LeadTime;
use App\Models\LeadTimeFactor;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeadTimeResource extends Resource
{
    protected static ?string $model = LeadTime::class;

    protected static ?string $navigationIcon = 'heroicon-s-clock';

    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_product')
                    ->label('Product')
                    ->options(Product::all()->pluck('name', 'id')->toArray()),
                Select::make('id_bom')
                    ->label('BOM')
                    ->options(BOM::all()->pluck('item', 'id')->toArray()),
                Select::make('id_lead_time_factor')
                    ->label('Lead Time Factor')
                    ->options(LeadTimeFactor::all()->pluck('name', 'id')->toArray()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')
                    ->label('Product'),
                Tables\Columns\TextColumn::make('bom.item')
                    ->label('BOM'),
                Tables\Columns\TextColumn::make('lead_time_factor.name')
                    ->label('Lead Time Factor'),
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
            'index' => Pages\ListLeadTimes::route('/'),
            'create' => Pages\CreateLeadTime::route('/create'),
            'edit' => Pages\EditLeadTime::route('/{record}/edit'),
        ];
    }
}
