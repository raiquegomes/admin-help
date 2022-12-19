<?php

namespace App\Http\Livewire\Utils;

use Livewire\Component;

use App\Models\ProductsValidate;

class UtilsCardsProductsLosing extends Component
{
    protected $listeners = ['refreshComponentValidate' => '$refresh'];
    public $ifExistValue = 0;
    public $searchProducts = 0;

    public function render()
    {
        if(ProductsValidate::where('validated_date', date('Y-m-d'))->exists())
        {
            $this->searchProducts = ProductsValidate::where('validated_date', date('Y-m-d'))->get();
            $this->ifExistValue == true;
        }
        return view('dashboard.utils.utils-cards-products-losing');
    }
}
