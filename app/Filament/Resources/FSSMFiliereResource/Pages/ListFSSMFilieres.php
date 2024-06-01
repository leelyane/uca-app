<?php

namespace App\Filament\Resources\FSSMFiliereResource\Pages;

use App\Filament\Resources\FSSMFiliereResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFSSMFilieres extends ListRecords
{
    protected static string $resource = FSSMFiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
