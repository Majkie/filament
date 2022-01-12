<?php

namespace Filament\Actions\Fields;

use Filament\Pages\Actions\Concerns\CanOpenUrl;
use Filament\Pages\Actions\Concerns\HasAction;

class LinkActionField extends ActionField
{
    use CanOpenUrl;
    use HasAction;

    protected string $view = 'filament::components.actions.fields.link-action';
}
