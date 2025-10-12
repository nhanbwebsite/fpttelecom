<?php

namespace App\Livewire\Admin\Order;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Symfony\Component\HttpKernel\Exception\HttpException;

class OrderController extends Component
{



    public function mount() {}

    #[On('deleteConfirmed')]
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $order = Client::find($id);
            if ($order) {
                $order->deleted_by = auth()->user()->id;
                $order->save();
            }
            $order->delete();
            DB::commit();
            $this->dispatch('swal', [
                'title'         => 'Xóa thành công!',
                'icon'          => 'success',
            ]);
            session()->flash('success', 'Xóa thành công!');
        } catch (HttpException $e) {
            DB::rollBack();
        }
    }


    #[Layout('layouts.app')]
    public function render()
    {
        $orders = Client::all();
        return view('livewire.admin.order.order-controller', compact('orders'));
    }
}
