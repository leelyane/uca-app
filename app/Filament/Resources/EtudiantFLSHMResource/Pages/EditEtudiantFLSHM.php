<?php

namespace App\Filament\Resources\EtudiantFLSHMResource\Pages;

use App\Filament\Resources\EtudiantFLSHMResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEtudiantFLSHM extends EditRecord
{
    protected static string $resource = EtudiantFLSHMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
