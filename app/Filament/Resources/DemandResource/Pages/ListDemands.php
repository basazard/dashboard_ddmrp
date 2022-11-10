<?php

namespace App\Filament\Resources\DemandResource\Pages;

use App\Filament\Resources\DemandResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemands extends ListRecords
{
    protected static string $resource = DemandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
