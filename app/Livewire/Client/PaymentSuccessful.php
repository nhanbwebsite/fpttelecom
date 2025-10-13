<?php

namespace App\Livewire\Client;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PaymentSuccessful extends Component
{


    #[Layout('layouts.client')]
    public function render()
    {
        if (session()->has('success') == null) {
            $this->redirect('/', navigate: false);
        }
        return view('livewire.client.payment-successful');
    }
}
