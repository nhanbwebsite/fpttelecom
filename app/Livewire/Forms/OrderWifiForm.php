<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderWifiForm extends Form
{
    public string $name = '';
    public string $phone = '';
    public string $province = '';
    public string $commune = '';
    public string $addressDetail = '';



    protected function rules(): array
    {
        return [
            'name'          => ['required', 'string', 'max:100'],
            'phone'         => ['required', 'regex:/^(0[0-9]{9})$/'],
            'province'      => ['required', 'string', 'max:255'],
            'commune'       => ['required', 'string', 'max:255'],
            'addressDetail' => ['required', 'string', 'max:255'],
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập họ tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'province.required' => 'Vui lòng chọn Tỉnh/Thành phố',
            'commune.required' => 'Vui lòng chọn Xã/Phưởng',
        ];
    }
}
