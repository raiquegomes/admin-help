<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\CutProducts;

class CutIntoProductsClear extends Component
{
    public $cut;
    public function clear()
    {
        $cut = CutProducts::truncate();
        $this->dispatchBrowserEvent('Swal:modal', [
            'type' => 'success',
            'title' => 'Os cortes foram apagados!',
            'text' => 'Todos os cortes foram apagados com sucesso! Supermercados (A&E)(P&F)',
        ]);
    }
    public function render()
    {
        return view('registros.cut-into-products-clear');
    }
}
