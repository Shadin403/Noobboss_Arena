<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    public function render()
    {
        return view('livewire.counter');
    }


    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}
