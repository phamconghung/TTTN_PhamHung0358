<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Banner;

class Bannershow2 extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
         $list_banner2 = Banner::where([['status','=',1],['position','bannershowend',
        'bannershowend']])->orderBy('sort_order', 'ASC')->get();
        return view('components.bannershow2',compact('list_banner2'));
    }
}
