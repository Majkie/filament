<?php

namespace Filament\Actions;

abstract class DropdownAction extends Action
{
    protected static string $view = 'filament::components.actions.dropdown-action';

    abstract public function getButton();

    abstract public function fields();

    public function getFields()
    {
        return $this->fields();
    }
}
