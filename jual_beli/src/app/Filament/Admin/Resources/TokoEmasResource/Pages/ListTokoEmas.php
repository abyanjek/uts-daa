<?php

namespace App\Filament\Admin\Resources\TokoEmasResource\Pages;

use App\Filament\Admin\Resources\TokoEmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTokoEmas extends ListRecords
{
    protected static string $resource = TokoEmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
