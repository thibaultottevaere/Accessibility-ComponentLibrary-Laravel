<?php

namespace ThibaultOttevaere\Components\View\Components\Form;

use Illuminate\Support\Str;
use ThibaultOttevaere\Components\View\Components\Component;

class Error extends Component
{
    public string $name;
    public string $bag;

    public function __construct(string $name, string $bag = 'default')
    {
		parent::__construct('form');

        $this->name = $this->convertBracketsToDots($name);
        $this->bag = $bag;
    }
}
