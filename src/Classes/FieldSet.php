<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FieldComposite;

/**
 * The fieldset element is a Concrete Composite.
 */
class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $output = parent::render();

        return <<<HTML
                    <fieldset>
                        <legend>{$this->title}</legend>
                        $output
                    </fieldset>
                HTML;
    }
}
