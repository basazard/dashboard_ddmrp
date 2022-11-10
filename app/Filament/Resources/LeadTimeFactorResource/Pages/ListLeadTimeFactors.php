<?php

namespace App\Filament\Resources\LeadTimeFactorResource\Pages;

use App\Filament\Resources\LeadTimeFactorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeadTimeFactors extends ListRecords
{
    protected static string $resource = LeadTimeFactorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
