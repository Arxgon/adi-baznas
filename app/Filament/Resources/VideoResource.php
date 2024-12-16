<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Tambahan';

   public static function canDelete(Model $record): bool
   {
        return false;
   }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('attachment')
                    ->required()
                    ->columnSpanFull()
                    ->acceptedFileTypes([
                        'video/mp4',
                        'video/webm',
                        'video/ogg',
                        'video/avi',
                        'video/mkv',
                        'video/flv'
                    ])
                    ->directory('vid')
                    ->afterStateUpdated(fn (callable $set, $state) => $set('type', $state?->getMimeType()))
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend('video-'),
                    )
                    ->label('Unggah Video')
                    ->maxSize(20000),
                TextInput::make('break')
                    ->required()
                    ->minValue(1)
                    ->type('number')
                    ->columnSpanFull()
                    ->label('Muncul setiap (menit)'),
                TextInput::make('type')
                    ->required()
                    ->columnSpanFull()
                    ->label('Type'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('attachment')
                    ->label('Iklan')
                    ->sortable(),
                Tables\Columns\TextInputColumn::make('break')
                    ->label('waktu muncul (menit)')
                    ->type('number')
                    ->alignRight()
                    ->rules(['required']),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ])
            ->paginated(false);
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'view' => Pages\ViewVideo::route('/{record}'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
