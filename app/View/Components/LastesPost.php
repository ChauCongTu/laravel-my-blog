<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LastesPost extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $thumb,
        public $author,
        public $date,
        public $category,
        public $link,
        public $name,
        public $content
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lastes-post');
    }
}