<?php

namespace App\Filament\Resources\FSJESDeclinedEtudiantResource\Pages;

use App\Filament\Resources\FSJESDeclinedEtudiantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFSJESDeclinedEtudiant extends EditRecord
{
    protected static string $resource = FSJESDeclinedEtudiantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
