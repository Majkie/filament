<?php

namespace Filament\Actions\Fields;

class LabelField extends ActionField
{
    protected string $view = 'filament::components.actions.fields.label';

    protected string $label;

    public function label(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}
