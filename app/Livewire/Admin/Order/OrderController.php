<?php

namespace App\Livewire\Admin\Order;

use App\Models\Client;
use Livewire\Attributes\Layout;
use Livewire\Component;

class OrderController extends Component
{



    public function mount() {

    }


    #[Layout('layouts.app')]
    public function render()
    {
        $orders = Client::all();
        return view('livewire.admin.order.order-controller',compact('orders'));
    }
}
