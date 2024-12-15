<?php

namespace App\Filament\Resources\AdsImageResource\Pages;

use App\Filament\Resources\AdsImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdsImages extends ListRecords
{
    protected static string $resource = AdsImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
