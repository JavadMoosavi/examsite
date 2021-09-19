<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;

class Counter extends Component
{
    public $count = 10;
    
    public function increament()
    {
        $this->count++;
    }

    public function decrement()
    {
        
        if($this->count > 5)
        {
            $this->count--;
        }
        
    }
    public function render()
    {
        
        return view('livewire.counter');
    }
}
