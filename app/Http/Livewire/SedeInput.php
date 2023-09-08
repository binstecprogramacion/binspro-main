<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SedeInput extends Component
{
    public $sede = '';
    public $sedes = [];

    public function addSede()
    {
        if (!empty($this->sede)) {
            array_push($this->sedes, $this->sede);
            $this->sede = '';
        }
    }

    public function removeSede($index)
    {
        unset($this->sedes[$index]);
        $this->sedes = array_values($this->sedes);
    }
    public function render()
    {
        return view('livewire.sede-input');
    }
}
