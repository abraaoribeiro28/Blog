<?php

namespace App\View\Components\Portal\Layout;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use App\Models\Admin\SocialMedia;
use Illuminate\Contracts\View\View;

class Footer extends Component
{
    public $table;

    /**
     * Create a new component instance.
     */
    public function __construct(SocialMedia $table)
    {
        $this->table = $table;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {


        $socialMedia = Cache::rememberForever('social-media', function () {
            return $this->table->where('status', true)->get();
        });

        return view('components.portal.layout.footer', compact('socialMedia'));
    }
}
