<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public array $links;

    /**
     * Create a new component instance.
     */
    public function __construct(string $encodedLinks)
    {
        $this->links = json_decode($encodedLinks, true);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.footer');
    }
}
