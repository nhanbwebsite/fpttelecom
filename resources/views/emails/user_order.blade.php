@php
use App\Models\Commune;
use App\Models\Province;
use App\Models\WifiProduct;
$commune = Commune::where('code',$data->commune_code)->first();
$province = Province::where('code',$data->province_code)->first();
$product = WifiProduct::where('id',$data->wifi_product_id)->first();
@endphp

Thông tin đặt sản phẩm
<p>Tên khách hàng: <strong>{{ $data->name }}</strong></p>
<a href="tel:{{ $data->phone }}">Số điện thoại <strong>{{ preg_replace('/(\d{4})(\d{3})(\d{3})/','$1.$2.$3',
        $data->phone) }}</strong></a>
<p>Địa chỉ: <strong> {{ $data->address }} - {{ $commune->name }} - {{ $province->name }}</strong></p>
<p>Tên sản phẩm: <strong>{{$product->name}}</strong></p>
{{-- <x-mail::button :url="''">
    Button Text
</x-mail::button> --}}

{{ __('FPT telecom') }}
