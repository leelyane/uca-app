<?php

namespace App\Filament\Resources\FLSHMFiliereResource\Pages;

use App\Filament\Resources\FLSHMFiliereResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFLSHMFiliere extends EditRecord
{
    protected static string $resource = FLSHMFiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
