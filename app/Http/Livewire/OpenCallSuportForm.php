<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;

use App\Models\TicketSupport;
use App\Models\Team;
use App\Models\Filial;

use Livewire\Component;

class OpenCallSuportForm extends Component
{
    public $tickets, $tickets_id, $filial, $responsavel, $description, $status_motived, $section, $user_id;

    public function render()
    {
        $this->team = Team::all();
        $this->filial_all = Filial::all();
        return view('tickets.open-call-suport-form');
    }

    public function store()
    {

        $this->validate([
            'filial' => 'required',
            'description' => 'required',
            'status_motived' => 'required',
            'responsavel' => 'required',
            'section' => 'required',
        ]);

        $createTicket = TicketSupport::updateOrCreate(['id' => $this->tickets_id], [
            'user_id' => Auth::user()->id,
            'filial' => $this->filial,
            'status' => 0,
            'motived' => $this->status_motived,
            'description' => $this->description,
            'section' => $this->section,
            'name_operator' => $this->responsavel,
        ]);

        if($createTicket == true)
        {
            $this->dispatchBrowserEvent('Swal:modal', [
                'type' => 'success',
                'title' => 'N° do chamaddo: '.$createTicket->id,
                'text' => 'O chamado foi aberto com sucesso!',
            ]);
        }

        $this->resetCreateForm();
        $this->emit('refreshComponent');
    }

    private function resetCreateForm(){

        $this->filial = '';
        $this->description = '';
        $this->status_motived = '';
        $this->responsavel = '';
    }
}
