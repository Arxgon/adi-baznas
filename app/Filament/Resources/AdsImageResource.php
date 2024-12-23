<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdsImageResource\Pages;
use App\Filament\Resources\AdsImageResource\RelationManagers;
use App\Models\AdsImage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdsImageResource extends Resource
{
    protected static ?string $model = AdsImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Tambahan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Gambar')
                    ->required()
                    ->autofocus()
                    ->columnSpanFull(),
                FileUpload::make('path')->image()->directory('ads')
                    ->label('Unggah Gambar')
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->imageEditor()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('path'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Gambar')
                    ->sortable(),
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
            'index' => Pages\ListAdsImages::route('/'),
            'create' => Pages\CreateAdsImage::route('/create'),
            'edit' => Pages\EditAdsImage::route('/{record}/edit'),
        ];
    }
}
