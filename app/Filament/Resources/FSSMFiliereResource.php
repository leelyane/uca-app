<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FSSMFiliereResource\Pages;
use App\Filament\Resources\FSSMFiliereResource\RelationManagers;
use App\Models\FSSMFiliere;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FSSMFiliereResource extends Resource
{
    protected static ?string $model = FSSMFiliere::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Filières';
    protected static ?string $navigationLabel = 'Filières de FSSM';
    protected static ?string $modelLabel = 'Filières';
    protected static ?string $slug = 'fssm-filieres';

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
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListFSSMFilieres::route('/'),
            'create' => Pages\CreateFSSMFiliere::route('/create'),
            'edit' => Pages\EditFSSMFiliere::route('/{record}/edit'),
        ];
    }
}
