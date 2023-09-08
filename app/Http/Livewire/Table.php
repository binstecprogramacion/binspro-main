<?php

namespace App\Http\Livewire;

use App\Models\Incident;
use Dotenv\Util\Str;
use Livewire\Component;

// public $captionHeader = 'Listado de incidencias';
// public $captionBody = 'Browse a list of Flowbite products
//             designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and
//             more.';
class Table extends Component
{
    public $listeners = [
        'input-form-submitted' => 'add',
        'word-found' => 'display'
    ];
    public array $data = [
        "apple",
        "banana",
        "cherry",
        "date",
        "eggplant",
        "fig",
        "grape",
        "honeydew",
        "kiwi",
        "lemon",
        "mango",
        "nectarine",
        "orange",
        "peach",
        "quince",
        "raspberry",
        "strawberry",
        "tomato",
        "watermelon"
    ];

    public $found = "";
    public function add(string $newData)
    {
        array_push($this->data, $newData);
    }
    public function display(string $word)
    {
        foreach ($this->data as $index => $value) {
            if (strpos($value, $word) !== false) {
                $this->found = $value;
                return;
            }
        }
        $this->found = "No se ha encontrado la palabra";
    }
    public function remove($index)
    {
        unset($this->data[$index]);
    }

    public function render()
    {
        return view('livewire.table');
    }
}

// [
        // $incidents = Incident::query();
        // $incidents = Incident::query();

        // if ($this->data) {
        //     $incidents = $incidents->where('Description', 'like', '%' . $this->data . '%');
        // }

        // $incidents = $incidents->paginate(5);

            // 'incidents' => $incidents
        // ]);