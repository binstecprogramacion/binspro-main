<?php

namespace App\Http\Livewire;

use App\Models\Incident;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class Search extends Component
{
    public $input;
    public function add()
    {
        $this->validate([
            'input' => 'required|string'
        ]);

        $this->emit('input-form-submitted', $this->input);
        $this->reset(['input']);
    }
    function findValueInArray()
    {
        $this->validate([
            'input' => 'required|string'
        ]);


        $this->emit('word-found', $this->input);
        $this->reset(['input']);
    }
    public function render()
    {
        return view('livewire.search');
    }
}
