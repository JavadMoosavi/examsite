<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ActionCntrl extends Controller
{
    //

    public $ty;

    public function ret_data()
    {
        $this->ty = Exam::all();
        
    }
}
