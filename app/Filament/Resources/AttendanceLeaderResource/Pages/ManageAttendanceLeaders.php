<?php

namespace App\Filament\Resources\AttendanceLeaderResource\Pages;

use App\Filament\Resources\AttendanceLeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAttendanceLeaders extends ManageRecords
{
    protected static string $resource = AttendanceLeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
