<?php

namespace App\View\Components\Portal\Includes;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Traits\FileTrait;

class Styles extends Component
{
    use FileTrait;

    public $cssColorPath;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cssColorPath = "storage/configurations/colors.css";
        if (!file_exists($this->cssColorPath)) {
            $this->saveColors($this->cssColorPath);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portal.includes.styles');
    }
}
