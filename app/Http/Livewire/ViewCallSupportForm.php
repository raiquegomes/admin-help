<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;


use Livewire\WithFileUploads;

use App\Models\TicketSupport;
use App\Models\User;

class ViewCallSupportForm extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    
    public $isModalOpen = 0;
    public function render()
    {
        $tickets = TicketSupport::orderByDesc('created_at')->simplePaginate(10);
        return view('tickets.view-call-support-form', ['tickets' => $tickets]);
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }


    public function close($id)
    {
        $close = TicketSupport::find($id);
        $close->status = 1;
        $close->user_id_closure = Auth::user()->id;
        $close->save();

        $this->dispatchBrowserEvent('Swal:modal', [
            'type' => 'success',
            'title' => 'O chamado N°: '.$close->id,
            'text' => 'O chamado foi encerrado com sucesso por '.Auth::user()->name.'!',
        ]);
    }

    public function view($id)
    {
            
        $this->openModalPopover();
        $ticket = TicketSupport::findOrFail($id);
        $userOper = User::find($ticket->user_id_closure);
        
        $this->ticket_id = $id;
        $this->ticket_description = $ticket->description;
        $this->ticket_operator = $ticket->name_operator;
        $this->ticket_status = $ticket->status;
        $this->ticket_created = $ticket->created_at->format('d/m/y').' as '.$ticket->created_at->format('H:i:s');
        $this->ticket_updated = $ticket->updated_at->format('d/m/y').' as '.$ticket->updated_at->format('H:i:s');
        if($userOper == true)
        {
            $this->ticket_setor_operation = $userOper->name;
        }else{
            $this->ticket_setor_operation = '';
        }

        //FILIAL
        if($ticket->filial == 1)
        {
            $this->ticket_filial = "Supermercado (P & F)";
        }else{
            $this->ticket_filial = "Supermercado (A & E)";
        }
        //MOTIVO DA ABERTURA
        if($ticket->motived == 1){
            $this->ticket_motived = "Promoção de Validade";
        }
        if($ticket->motived == 2){
            $this->ticket_motived = "Remover produto da promoção";
        }
        if($ticket->motived == 3){
            $this->ticket_motived = "Inconsistência de valor de produto";
        }
        if($ticket->motived == 4){
            $this->ticket_motived = "Duvida sobre produto";
        }

        //DEPARTAMENTO
        if($ticket->section == 1)
        {
            $this->ticket_section = 'Cadastro';
        }
        if($ticket->section == 2)
        {
            $this->ticket_section = 'Operadores(a)';
        }
        if($ticket->section == 3)
        {
            $this->icket_section = 'Financeiro';
        }
        if($ticket->section == 4)
        {
            $this->ticket_section = 'Compras';
        }
        if($ticket->section == 5)
        {
            $this->ticket_section = 'Gerência';
        }
        if($ticket->section == 6)
        {
            $this->ticket_section = 'Recursos Humanos (RH)';
        }

    }

}
