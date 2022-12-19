<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NFs;

class NFeFormView extends Component
{
    
    protected $listeners = ['refreshComponentnfeview' => '$refresh'];
    public function render()
    {
        $this->nfe = NFs::orderByDesc('created_at')->get();
        return view('NFe.n-fe-form-view');
    }
    public function entry($id)
    {
        $close = NFs::find($id);
        $close->entry = 1;
        $close->save();

        $this->dispatchBrowserEvent('Swal:modal', [
            'type' => 'success',
            'title' => 'A NFe°: '.$close->id,
            'text' => 'Foi confirmada como dado entrada com sucesso!',
        ]);
    }

    public function delete($id)
    {
        $this->security_del = NFs::find($id)->delete();

        session()->flash('message', 'A NFe foi inserida com sucesso!');
    }
}
