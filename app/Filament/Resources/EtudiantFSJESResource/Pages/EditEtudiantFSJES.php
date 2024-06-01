<?php

namespace App\Filament\Resources\EtudiantFSJESResource\Pages;

use App\Filament\Resources\EtudiantFSJESResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEtudiantFSJES extends EditRecord
{
    protected static string $resource = EtudiantFSJESResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
