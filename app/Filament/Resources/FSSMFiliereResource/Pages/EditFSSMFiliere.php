<?php

namespace App\Filament\Resources\FSSMFiliereResource\Pages;

use App\Filament\Resources\FSSMFiliereResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFSSMFiliere extends EditRecord
{
    protected static string $resource = FSSMFiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
