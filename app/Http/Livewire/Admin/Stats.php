<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Stats extends Component
{
    //type can be percent or integer
    public string $type = 'percent';
    public string $title = 'Stat Title';

    //if type is integer only base_value is read
    public int $base_value;
    public int $sub_value = 0;

    public function render()
    {
        return view('livewire.admin.stats');
    }
}
