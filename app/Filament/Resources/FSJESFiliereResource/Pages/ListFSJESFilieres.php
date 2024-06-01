<?php

namespace App\Filament\Resources\FSJESFiliereResource\Pages;

use App\Filament\Resources\FSJESFiliereResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFSJESFilieres extends ListRecords
{
    protected static string $resource = FSJESFiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
