<?php

namespace ThibaultOttevaere\Components\View\Components\Navigation;

use ThibaultOttevaere\Components\View\Components\Component;

abstract class NavigationComponent extends Component
{
	public function __construct()
	{
		parent::__construct('navigation');
	}
}