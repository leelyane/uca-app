<?php

namespace App\Filament\Resources\FLSHMFiliereResource\Pages;

use App\Filament\Resources\FLSHMFiliereResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFLSHMFilieres extends ListRecords
{
    protected static string $resource = FLSHMFiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
