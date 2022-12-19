<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\NFs;

class NfeForm extends Component
{
    public $access_key;
    public function render()
    {
        return view('NFe.nfe-form');
    }

    public function store()
    {
        $this->validate([
            'access_key' => 'required|min:44|max:44',
        ]);

        NFs::create([
            'access_key' => $this->access_key,
        ]);
        $this->resetCreateForm();
        session()->flash('message', 'A NFe foi inserida com sucesso!');
        $this->emit('refreshComponentnfeview');

    }

    private function resetCreateForm(){

        $this->access_key = '';
    }

}
