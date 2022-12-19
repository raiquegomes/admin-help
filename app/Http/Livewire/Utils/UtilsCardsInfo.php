<?php

namespace App\Http\Livewire\Utils;

use Livewire\Component;

use App\Models\User;
use App\Models\TicketSupport;
use App\Models\Products;

class UtilsCardsInfo extends Component
{
    public $team, $tickets;
    public function render()
    {
        $this->team = User::count();
        $this->tickets = TicketSupport::count();
        $this->products = Products::count();
        return view('dashboard.utils.utils-cards-info');
    }
}
