<?php

namespace App\Filament\Resources\EtudiantFLSHMResource\Pages;

use App\Filament\Resources\EtudiantFLSHMResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListEtudiantFLSHMS extends ListRecords
{
    protected static string $resource = EtudiantFLSHMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return[
            'Total' => Tab::make(),
            'Preinscris' => Tab::make()->modifyQueryUsing(fn (Builder $query)=> $query->where('statut', 'En attente', true)),
            'Acceptée' => Tab::make()->modifyQueryUsing(fn (Builder $query)=> $query->where('statut', 'Acceptée', true)),
            'Dossier validé' => Tab::make()->modifyQueryUsing(fn (Builder $query)=> $query->where('valid', 'Oui', true)),
            'Dossier non validé' => Tab::make()->modifyQueryUsing(fn (Builder $query)=> $query->where('valid', 'Non', true)),
            'Dossier retiré' => Tab::make()->modifyQueryUsing(fn (Builder $query)=> $query->where('retire', 'Oui', true)),
        ];
    }
}
