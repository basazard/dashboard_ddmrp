<?php

namespace App\Filament\Resources\DemandResource\Pages;

use App\Filament\Resources\DemandResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemand extends EditRecord
{
    protected static string $resource = DemandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
