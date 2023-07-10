<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemCardCategories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $first = 0,
        public $thumb,
        public $author,
        public $date,
        public $link,
        public $name,
        public $content = '',
        public $last = 0
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-card-categories');
    }
}
