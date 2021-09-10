<?php

namespace App\Http\Livewire;

use App\Models\Site;
use Livewire\Component;

class Sites extends Component
{
    public function render()
    {
        return view('livewire.sites', [
            'sites' => Site::all(),
        ]);
    }

    public function delete(int $id) {
        Site::where('id', $id)->delete();
    }
}
