<?php

namespace Filament\Actions\Fields;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\Component;

class ActionField extends Component implements Htmlable
{
    protected string $view;

    protected string $name;

    final public function __construct(string $name)
    {
        $this->name($name);
    }

    public static function make(string $name): static
    {
        $static = new static($name);

        $static->setUp();

        return $static;
    }

    protected function setUp()
    {

    }

    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function view(string $view): static
    {
        $this->view = $view;

        return $this;
    }

    public function name(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getView(): string
    {
        return $this->view;
    }

    public function render()
    {
        return view($this->getView(), array_merge($this->data(), [
            'component' => $this
        ]));
    }
}
