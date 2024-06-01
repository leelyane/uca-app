<?php

namespace App\Filament\Resources\FSSMDeclinedEtudiantResource\Pages;

use App\Filament\Resources\FSSMDeclinedEtudiantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFSSMDeclinedEtudiant extends EditRecord
{
    protected static string $resource = FSSMDeclinedEtudiantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
