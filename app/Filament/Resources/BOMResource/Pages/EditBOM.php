<?php

namespace App\Filament\Resources\BOMResource\Pages;

use App\Filament\Resources\BOMResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBOM extends EditRecord
{
    protected static string $resource = BOMResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
