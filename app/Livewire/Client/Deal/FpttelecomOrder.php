<?php

namespace App\Livewire\Client\Deal;

use App\Events\UserOrder;
use App\Livewire\Forms\OrderWifiForm;
use App\Models\Client;
use App\Models\Commune;
use App\Models\Province;
use App\Models\WifiProduct;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Symfony\Component\HttpKernel\Exception\HttpException;

class FpttelecomOrder extends Component
{
    public $name = '';
    public $phone = '';
    public $province_code; // Thêm thuộc tính này để lưu giá trị tỉnh thành
    public $count = 1;
    public $provinceCode = '';
    public $communeCode = '';
    public $province;
    public $communes = [];
    public $commune;
    public $note = '';
    public $addressDetail = '';
    public OrderWifiForm $form;

    public $slug;
    public $wifiProduct;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->wifiProduct = WifiProduct::where('slug', $this->slug)->first();

        if (! $this->wifiProduct) {
            return back();
        }
    }
    public function getCommunes($value)
    {

        $this->provinceCode = $value;
        $this->province   = Province::where('code', $this->provinceCode)->first();
        $this->communes = Commune::where('provinceCode', $this->provinceCode)->get();
    }
    public function communeValue($value)
    {
        $this->communeCode = $value;
        $this->commune = '';
        $this->commune = Commune::where('code', $this->communeCode)->first();
    }

    public function confirmOrder()
    {

        $this->validate();
        try {
            DB::beginTransaction();
            $data = [
                'name'              => $this->form->name,
                'province_code'     => $this->form->province,
                'commune_code'      => $this->form->commune,
                'address'           => $this->form->addressDetail,
                'phone'             => $this->form->phone,
                'wifi_product_id'   => $this->wifiProduct->id
            ];

            $order =  Client::create($data);


            event(new UserOrder($order));
            $this->dispatch('swal', [
                'title'         => 'Đăng ký lắp Wi-Fi thành công!',
                'icon'          => 'success',
                'text'          => 'Sẽ có nhân viên liên hệ tư vấn cho quý khách, Xin cảm ơn đã sử dụng dịch vụ !',
                'redirect'      => '/'
            ]);
            session()->flash('success', 'Đăng ký thành công!');
            DB::commit();

            return redirect(route('client.payment-successful'))->with('success','Đăng ký thành công');
        } catch (HttpException $e) {
            DB::rollBack();
        }
    }

    #[Layout('layouts.client')]
    public function render()
    {
        if (!$this->wifiProduct) {
            $wifiProducts = WifiProduct::get();
            return view('livewire.client.deal.fpttelecom', compact('wifiProducts'));
        }
        $provinces = Province::all();
        return view('livewire.client.deal.fpttelecom-order', compact('provinces'));
    }
}
