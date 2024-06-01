<?php

namespace App\Filament\Resources\FLSHMDeclinedEtudiantResource\Pages;

use App\Filament\Resources\FLSHMDeclinedEtudiantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFLSHMDeclinedEtudiants extends ListRecords
{
    protected static string $resource = FLSHMDeclinedEtudiantResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
