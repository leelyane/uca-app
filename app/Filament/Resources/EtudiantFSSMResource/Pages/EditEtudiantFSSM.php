<?php

namespace App\Filament\Resources\EtudiantFSSMResource\Pages;

use App\Filament\Resources\EtudiantFSSMResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEtudiantFSSM extends EditRecord
{
    protected static string $resource = EtudiantFSSMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
