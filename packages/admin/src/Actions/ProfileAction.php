<?php

namespace Filament\Actions;

use Filament\Actions\Fields\DividerField;
use Filament\Actions\Fields\LabelField;
use Filament\Actions\Fields\LinkActionField;
use Filament\Tables\Actions\IconButtonAction;

class ProfileAction extends DropdownAction
{
    protected static ?int $sort = -2;

    public function getButton()
    {
        return IconButtonAction::make('Profile')
            ->icon('heroicon-o-user');
    }

    public function fields(): array
    {
        return [
            LabelField::make('Label')
                ->label('User profile'),

            LinkActionField::make('Profile')
                ->url('/admin/pallets'),

            DividerField::make('Divider'),

            LinkActionField::make('Logout')
                ->action('logoutAction'),
        ];
    }

    public function logoutAction()
    {
        auth()->guard()->logout();

        return redirect()->route('welcome');
    }
}
