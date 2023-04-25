<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $header; // Tiêu đề cột
    public $datas; // Dữ liệu bảng
    /**
     * Create a new component instance.
     */
    public function __construct($header, $datas)
    {
        $this->header = $header;
        $this->datas = $datas;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
