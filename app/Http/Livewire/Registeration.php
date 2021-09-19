<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Livewire\Component;



class Registeration extends Component
{

    public $name;
    public $email;
    public $mobile;
    public $password;
    public $chk;
   
    

    public function show()
    {
        
    }

    public function mount(Request $request)
    {
        $this -> chk = $request->all();
    }

    public function submitfrm()
    {
        dd($this->chk);
    }   

    public function render()
    {
        return view('livewire.registeration');
    }
}
