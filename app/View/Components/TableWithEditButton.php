<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableWithEditButton extends Component
{
    public $dataId;
    /**
     * Create a new component instance.
     */
    public function __construct($dataId)
    {
        $this->dataId = $dataId;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table-with-edit-button');
    }
}
