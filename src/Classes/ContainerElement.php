<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FieldComposite;

class ContainerElement extends FieldComposite
{
    private string $class;

    public function __construct(string $name = "container", array $classes = [])
    {
        parent::__construct($name, $name);
        $this->class = join(' ', $classes);
    }

    public function render(): string
    {
        $output = parent::render();

        return <<<HTML
                <div class="{$this->class}">
                    $output
                </div>
                HTML;
    }

    public function bulkAdd(array $items): void
    {
        foreach ($items as $item) {
            $this->add($item);
        }
    }
}
