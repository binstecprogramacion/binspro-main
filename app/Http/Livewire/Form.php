<?php

namespace App\Http\Livewire;

use App\Models\MaintenanceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Form extends Component
{
    use WithPagination;

    public $categories;

    public function mount()
    {
        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->categories = MaintenanceCategory::paginate(5)->toArray()['data'];
    }

    public function render()
    {
        return view('livewire.form');
    }
}
