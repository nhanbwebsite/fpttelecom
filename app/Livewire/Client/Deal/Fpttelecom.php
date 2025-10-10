<?php

namespace App\Livewire\Client\Deal;

use App\Livewire\Forms\OrderWifiForm;
use App\Models\WifiProduct;
use Livewire\Attributes\Layout;
use Livewire\Component;
class Fpttelecom extends Component
{
    public OrderWifiForm $form;
    #[Layout('layouts.client')]
    public function orderwifi(): void
    {
        $this->validate();
    }
    public function render()
    {
        $wifiProducts = WifiProduct::get();
        return view('livewire.client.deal.fpttelecom', compact('wifiProducts'));
    }
}
