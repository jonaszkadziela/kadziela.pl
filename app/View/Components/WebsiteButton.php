<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $link,
        public ?string $icon = null,
    ) {
        $this->icon = $this->icon ?? 'fa-solid fa-earth-americas text-4xl';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.website-button');
    }
}
