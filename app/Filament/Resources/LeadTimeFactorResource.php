<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadTimeFactorResource\Pages;
use App\Filament\Resources\LeadTimeFactorResource\RelationManagers;
use App\Models\LeadTimeFactor;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeadTimeFactorResource extends Resource
{
    protected static ?string $model = LeadTimeFactor::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lead_time_factor_range')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('lead_time_factor_range'),
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
            'index' => Pages\ListLeadTimeFactors::route('/'),
            'create' => Pages\CreateLeadTimeFactor::route('/create'),
            'edit' => Pages\EditLeadTimeFactor::route('/{record}/edit'),
        ];
    }    
}
