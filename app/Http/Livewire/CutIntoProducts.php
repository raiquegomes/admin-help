<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use RealRashid\SweetAlert\Facades\Alert;

use Livewire\Component;
use App\Models\Products;
use App\Models\CutProducts;
use App\Models\ProductsCutsFornecedores;

class CutIntoProducts extends Component
{
    public $ean;
    public $searchProduct;
    public $qty;
    public $product_id;
    public $qty_formated;
    public $filial;

    public function store()
    {
        $this->validate([
            'searchProduct' => 'required',
            'ean' => 'required',
            'qty' => 'required|max:5',
            'filial' => 'required',
        ]);

        if(ProductsCutsFornecedores::find($this->searchProduct))
        {

            $this->qty_formated = sprintf("%05d", $this->qty);

            CutProducts::updateOrCreate(['id' => $this->product_id], [
                'EAN' => $this->ean,
                'Qty' => $this->qty_formated,
                'Filial' => $this->filial,
            ]);

            $this->dispatchBrowserEvent('Swal:modal', [
                'type' => 'success',
                'title' => 'Sucesso!',
                'text' => 'O produto foi adicionado com sucesso aos registros de cortes!',
            ]);
            $this->emit('refreshComponentCut');
            $this->resetCreateForm();

        }else{
            $this->dispatchBrowserEvent('Swal:modal', [
                'type' => 'error',
                'title' => 'Pow! Maluco, você é burro?!',
                'imageUrl' => 'https://i.ytimg.com/vi/-MK1q9fZjeI/mqdefault.jpg',
                'imageWidth'=> 400,
                'imageHeight'=> 200,
                'text' => 'Esse produto não está qualificado para colocar nos cortes!',
            ]);
        }

    }


    private function resetCreateForm(){

        $this->ean = '';
        $this->searchProduct = '';
        $this->qty = '';
    }

    public function render()
    {
        $searchProduct = $this->searchProduct;
        //VALIDAÇÃO DE FOI INSERIDO UM PRODUTO NO INPUT
        if($searchProduct == true)
        {
            $product = Products::find($searchProduct); //VERIFICANDO SE EXISTE O CODIGO INFORMADO NO BANCO DE DADOS

            // VERIFICANDO SE EXISTE ALGUM RESULTADO
            if($product == true)
            {
                $this->ean = $product->EAN;
                $this->nome = $product->Nome;

                session()->flash('message', 'O produto: '. $this->nome.', foi encontrado.');

            }else{
                $this->ean = '';
                session()->flash('info', 'O codigo e inválido ou não foi encontrado no banco de dados.');
                
            }
        }
        return view('functions.cut-into-products');
    }
}
