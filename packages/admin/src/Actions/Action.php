<?php

namespace Filament\Actions;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Action extends Component
{
    protected static ?int $sort = null;

    protected static string $view;

    public static function getSort(): int
    {
        return static::$sort ?? -1;
    }

    public function getViewData()
    {
        return [];
    }

    public function render(): View
    {
        return view(static::$view, $this->getViewData());
    }
}
