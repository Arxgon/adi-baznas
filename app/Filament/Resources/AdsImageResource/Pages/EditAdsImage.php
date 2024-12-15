<?php

namespace App\Filament\Resources\AdsImageResource\Pages;

use App\Filament\Resources\AdsImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdsImage extends EditRecord
{
    protected static string $resource = AdsImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
