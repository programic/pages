<?php

namespace App\Http\Livewire\Atoms;

use Livewire\Component;

class Section extends Component
{
    public string $title;
    public string $slug;


    public function render()
    {
        return view('livewire.atoms.section');
    }
}
