<?php

namespace App\Filament\Resources\LeadTimeResource\Pages;

use App\Filament\Resources\LeadTimeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeadTime extends EditRecord
{
    protected static string $resource = LeadTimeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
