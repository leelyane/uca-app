<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FLSHMFiliereResource\Pages;
use App\Filament\Resources\FLSHMFiliereResource\RelationManagers;
use App\Models\FLSHMFiliere;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FLSHMFiliereResource extends Resource
{
    protected static ?string $model = FLSHMFiliere::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Filières';
    protected static ?string $navigationLabel = 'Filières de FLSHM';
    protected static ?string $modelLabel = 'Filières';
    protected static ?string $slug = 'flshm-filieres';

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
            'index' => Pages\ListFLSHMFilieres::route('/'),
            'create' => Pages\CreateFLSHMFiliere::route('/create'),
            'edit' => Pages\EditFLSHMFiliere::route('/{record}/edit'),
        ];
    }
}
