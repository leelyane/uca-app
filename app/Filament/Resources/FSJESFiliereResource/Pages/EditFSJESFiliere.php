<?php

namespace App\Filament\Resources\FSJESFiliereResource\Pages;

use App\Filament\Resources\FSJESFiliereResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFSJESFiliere extends EditRecord
{
    protected static string $resource = FSJESFiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
