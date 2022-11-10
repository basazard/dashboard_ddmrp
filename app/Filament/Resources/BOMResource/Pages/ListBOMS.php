<?php

namespace App\Filament\Resources\BOMResource\Pages;

use App\Filament\Resources\BOMResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBOMS extends ListRecords
{
    protected static string $resource = BOMResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
