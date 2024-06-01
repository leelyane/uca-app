<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FSJESDeclinedEtudiantResource\Pages;
use App\Filament\Resources\FSJESDeclinedEtudiantResource\RelationManagers;
use App\Models\FSJESDeclinedEtudiant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FSJESDeclinedEtudiantResource extends Resource
{
    protected static ?string $model = FSJESDeclinedEtudiant::class;

    protected static ?string $navigationIcon = 'heroicon-o-trash';
    protected static ?string $navigationLabel = 'Rejeté';
    protected static ?string $modelLabel = 'Étudiant rejeté';
    protected static ?string $slug = 'fsjes-etudiants-rejetes';
    protected static ?string $navigationGroup = 'FSJES';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
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
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFSJESDeclinedEtudiants::route('/'),
            'create' => Pages\CreateFSJESDeclinedEtudiant::route('/create'),
            'edit' => Pages\EditFSJESDeclinedEtudiant::route('/{record}/edit'),
        ];
    }
}
