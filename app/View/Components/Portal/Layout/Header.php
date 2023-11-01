<?php

namespace App\View\Components\Portal\Layout;

use App\Models\Admin\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class Header extends Component
{
    public $menus, $table, $level;

    /**
     * Create a new component instance.
     */
    public function __construct(Menu $table)
    {
        $this->table = $table;

        $this->menus = Cache::remember('menu_structure', 3600, function () {
            return $this->menus = $this->table->with('allChildren')
                ->whereNull('menus_id')
                ->orderBy('order')
                ->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portal.layout.header');
    }
}
