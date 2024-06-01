<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EtudiantFSJESResource\Pages;
use App\Filament\Resources\EtudiantFSJESResource\RelationManagers;
use App\Models\EtudiantFSJES;
use App\Models\FSJESDeclinedEtudiant;
use App\Notifications\ConfirmInscription;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EtudiantFSJESResource extends Resource
{
    protected static ?string $model = EtudiantFSJES::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Étudiant';
    protected static ?string $modelLabel = 'Étudiant';
    protected static ?string $slug = 'fsjes-etudiants';
    protected static ?string $navigationGroup = 'FSJES';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('nom')->label('Nom'),
            TextInput::make('prenom')->label('Prénom'),
            TextInput::make('code')->label('Code')->unique(),
            TextInput::make('cni')->label('CNI')->unique(),
            TextInput::make('cne')->label('CNE')->unique(),
            DatePicker::make('birthdate')->label('Date de Naissance'),
            Radio::make('sexe')
            ->options([
                'male' => 'Homme', 'female' => 'Femme',
            ])->label('Sexe'),
            TextInput::make('email')->label('E-MAIL')->email(),
            TextInput::make('tel')->label('Num Tél')->tel(),
            TextInput::make('adresse')->label('Adresse'),
            TextInput::make('ville')->label('Ville'),
            FileUpload::make('photo'),
            TextInput::make('anneebac')->label('Année du Bac'),
            TextInput::make('seriebac')->label('Série du Bac'),
            Select::make('filiere_id')->label('Filière')->relationship(name: 'filiere', titleAttribute: 'name')
            ->required()->preload()->searchable(),
            Forms\Components\Select::make('statut')
            ->options([
                ''=>'',
                'Acceptée' => 'Acceptée',                        
                'Refusée' => 'Refusée',
            ])->label('Préinscription')->default('En attente')->native(false),
            Radio::make('valid')
            ->options([
                ''=>'',
                'Oui' => 'Oui',
                'Non' => 'Non',
            ])->label('Dossier validé')->columns(2),
            Radio::make('retire')
            ->options([
                ''=>'',
                'Oui' => 'Oui',
                'Non' => 'Non',
            ])->label('Dossier retiré')->columns(2),
            Select::make('filiere_id')->label('Filière')->relationship(name: 'filiere', titleAttribute: 'name')
            ->required()->preload()->searchable(),
        ])->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')->sortable(),
                TextColumn::make('prenom')->sortable(),
                TextColumn::make('cni')->sortable(),
                TextColumn::make('cne')->sortable(),
                TextColumn::make('email')->sortable(),
                TextColumn::make('adresse')->sortable(),
                TextColumn::make('ville')->sortable(),
                ImageColumn::make('photo'),
                TextColumn::make('anneebac')->sortable(),
                TextColumn::make('seriebac')->sortable(),
                TextColumn::make('filiere.name')->sortable(),
                TextColumn::make('statut')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('confirmer')
                    ->label('Confirmer')->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->action(function (EtudiantFSJES $record) {
                        $record->update(['statut' => 'Acceptée']);
                        $record->notify(new ConfirmInscription());
                    }),
                Tables\Actions\Action::make('rejeter')
                    ->label('Rejeter')->color('danger')
                    ->icon('heroicon-o-trash')
                    ->action(function (EtudiantFSJES $record) {
                        FSJESDeclinedEtudiant::create($record->toArray());
                        $record->delete();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEtudiantFSJES::route('/'),
            'create' => Pages\CreateEtudiantFSJES::route('/create'),
            'edit' => Pages\EditEtudiantFSJES::route('/{record}/edit'),
        ];
    }
}
