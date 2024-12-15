<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MonthResource\Pages;
use App\Filament\Resources\MonthResource\RelationManagers;
use App\Models\Month;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Support\RawJs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use NumberFormatter;

class MonthResource extends Resource
{
    protected static ?string $model = Month::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kas';

    protected static ?string $navigationLabel = 'Pengaturan Bulan';

    protected static ?string $label = 'Kas Per Bulan';

    public static function canCreate(): bool
   {
        return false;
   }

   public static function canDelete(Model $record): bool
   {
        return false;
   }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('month_name')
                    ->label('Penghimpunan dan Pendistribusian untuk Bulan')
                    ->disabled()
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('collection')
                    ->label('Penghimpunan')
                    ->prefix('Rp')
                    ->columnSpanFull()
                    ->required()
                    ->numeric()
                    ->step(1000000)
                    ->mask(RawJs::make(<<<'JS'
                        $money($input, ',')
                    JS))
                    ->stripCharacters('.')
                    ->default(0),
                Forms\Components\TextInput::make('distribution')
                    ->prefix('Rp')
                    ->columnSpanFull()
                    ->label('Pendistribusian')
                    ->required()
                    ->numeric()
                    ->step(1000000)
                    ->mask(RawJs::make(<<<'JS'
                        $money($input, ',')
                    JS))
                    ->stripCharacters('.')
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('month_name')
                ->label('Bulan')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('collection')
                //     ->label('Penghimpunan')
                //     ->money('IDR')
                //     ->sortable(),
                Tables\Columns\TextInputColumn::make('collection')
                    ->label('Penghimpunan (Rp)')
                    ->alignRight()
                    ->rules(['required'])
                    // ->type('number')
                    ->mask(RawJs::make(<<<'JS'
                       $money($input, ',')
                    JS))
                    // ->updateStateUsing(function ($record, $state) {
                    //     $stateWithoutMask = str_replace('.', '', $state);
                    //     $integerValue = is_numeric($stateWithoutMask) ? intval($stateWithoutMask) : 0;
                    //     $record->update(['collection' => $integerValue]);
                    //     $a = number_format($integerValue, 0, ',', '.');
                    //     return $a;
                    // })
                    ->getStateUsing(function ($record) {
                        return number_format($record->collection, 0, ',', '.');
                    }),
                // Tables\Columns\TextColumn::make('distribution')
                // ->label('Pendistribusian')
                //     ->money('IDR')

                //     ->sortable(),
                Tables\Columns\TextInputColumn::make('distribution')
                    ->label('Pendistribusian (Rp)')
                    ->alignRight()
                    ->rules(['required'])
                    // ->type('number')
                    ->mask(RawJs::make(<<<'JS'
                       $money($input, ',')
                    JS))
                    // ->updateStateUsing(function ($record, $state) {
                    //     $stateWithoutMask = str_replace('.', '', $state);
                    //     $integerValue = is_numeric($stateWithoutMask) ? intval($stateWithoutMask) : 0;
                    //     $record->update(['collection' => $integerValue]);
                    //     $a = number_format($integerValue, 0, ',', '.');
                    //     return $a;
                    // })
                    ->getStateUsing(function ($record) {
                        return number_format($record->distribution, 0, ',', '.');
                    }),
               Tables\Columns\TextColumn::make('year.year')
                ->label('Tahun')
                    ->sortable(),

            ])
            ->defaultGroup('year.year')
            ->paginated([12, 24, 48, 96, 'all'])
            ->defaultPaginationPageOption(12)
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMonths::route('/'),
            'create' => Pages\CreateMonth::route('/create'),
            'edit' => Pages\EditMonth::route('/{record}/edit'),
        ];
    }
}
