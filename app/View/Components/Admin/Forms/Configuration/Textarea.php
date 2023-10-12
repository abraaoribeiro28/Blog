<?php

namespace App\View\Components\Admin\Forms\Configuration;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $id,
        public $title = null,
        public $description = null,
        public $dataArray = null,
        public $value = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.forms.configuration.textarea');
    }
}
