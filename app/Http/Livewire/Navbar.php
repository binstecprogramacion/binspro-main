<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.navbar', [
            'title' => $this->title
        ]);
    }
}
