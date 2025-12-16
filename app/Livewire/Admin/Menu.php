<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\App;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Menu extends Component
{
     public function mount()
    {
        App::setLocale('vi');
         App::setLocale(session('locale', 'vi'));
    }
    #[Layout('layouts.app')]
    public function render()
    {

        return view('livewire.admin.menu');
    }
}
