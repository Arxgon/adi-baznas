<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendanceLeaderResource\Pages;
use App\Filament\Resources\AttendanceLeaderResource\RelationManagers;
use App\Models\AttendanceLeader;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendanceLeaderResource extends Resource
{
    protected static ?string $model = AttendanceLeader::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Absensi';

    protected static ?string $navigationLabel = 'Absensi Pimpinan';

    protected static ?string $label = 'Absensi Pimpinan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('position')
                    ->label('Posisi')
                    ->disabled(),
                Forms\Components\Select::make('attendance_status')
                    ->label('Status Absensi')
                    ->options(array_combine(AttendanceLeader::getStatusOptions(), AttendanceLeader::getStatusOptions()))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('position')
                    ->label('Posisi')
                    ->searchable(),
                Tables\Columns\SelectColumn::make('attendance_status')
                    ->label('Status Absensi')
                    ->rules(['required'])
                    ->selectablePlaceholder(false)
                    ->options(array_combine(AttendanceLeader::getStatusOptions(), AttendanceLeader::getStatusOptions())),
                // Tables\Columns\TextColumn::make('attendance_status')
                //     ->label('Status Absensi'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->paginated(false);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAttendanceLeaders::route('/'),
        ];
    }
}
