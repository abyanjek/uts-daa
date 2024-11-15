<?php

namespace App\Filament\Admin\Resources\TokoEmasResource\Pages;

use App\Filament\Admin\Resources\TokoEmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTokoEmas extends EditRecord
{
    protected static string $resource = TokoEmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
