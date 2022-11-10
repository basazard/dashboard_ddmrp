<?php

namespace App\Filament\Resources\LeadTimeFactorResource\Pages;

use App\Filament\Resources\LeadTimeFactorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeadTimeFactor extends EditRecord
{
    protected static string $resource = LeadTimeFactorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
