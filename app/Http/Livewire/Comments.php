<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;



class Comments extends Component
{

    public $datafetch;
    public $count_row;
    public $row;
    public $tr;
    public $comments = 
    [
        [
            'body' => 'متن شماره یک',
            'creator' => 'موسوی'
        ]
        ,
        [
            'body' => 'متن شماره دو',
            'creator' => 'صادقی'
        ]
        ,
        [
            'body' => 'متن شماره سه',
            'creator' => 'ممحمدی'
        ]
    ];

    public $ans = ['Q1' => '1', 'Q2' => '3'];

    public function addnew()
    {
        $this->comments[] =
        [
            'body' => Crypt::decryptString('eyJpdiI6IjlVZkZyNWg5T1RMWC9jT3lEMG9Eenc9PSIsInZhbHV
            lIjoiUnZxb2tnNjBuNFpkNWpiZ293bjM3UT09IiwibWFjIjoiYzJjMzJjZDNkNWMxODA3YmY1Zjc5NTM3Ym
            E4MjUzOTdlMWFhYjRiODI3NWQwZmZmYWQ3ZTJkZDJlMDYyZTFmNiIsInRhZyI6IiJ9'),
            'creator' => 'Sadegh'
        ];

    }

    public function addtodb()
    {
        Exam::create([
            'title' => "آزمون شماره 3",
            'type' => "تستی",
            'qcount' => "12",
            'answers' => "1212222333000"
        ], );
    }

    public function show_data()
    {
        $this->datafetch = Exam::all();
        $this->count_row = $this->datafetch->count();
        $this->ans['Q1'] = "12";
    }

    public function render()
    {
        $this->datafetch = Exam::all();
        return view('livewire.comments');
    }
}
