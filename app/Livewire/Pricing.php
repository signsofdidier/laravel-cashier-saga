<?php

namespace App\Livewire;

use App\Models\Plan;
use Livewire\Component;

class Pricing extends Component
{
    public $plans;

    public function mount(){
        $this->plans = Plan::all();
    }

    public function render()
    {
        return view('livewire.pricing');
    }
}
