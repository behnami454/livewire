<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{    
    public $count = 0;
    public $name;

    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function reseet()
    {
        $this->name=" ";
    }
  
    
   

    public function render()
    {
        return view('livewire.card');
    }

}
