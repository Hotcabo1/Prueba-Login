<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Incidencias;

class Incidencias extends Component
{
    //Variable de incidencias
    public $incidencias;
    public function render()
    {
        //Guardar todos lo de las bd
        $this->incidencias = Incidencias::all();
        return view('livewire.incidencias');
    }
}
