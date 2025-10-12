<div class="container">
    <style>
        * {
            box-sizing: border-box;
            font-family: "Inter", sans-serif;
        }

        body {
            background: #f8fafc;
            color: #333;
            padding: 40px 10px;
        }

        .container {
            display: flex;
            gap: 40px;
            max-width: 1100px;
            margin: 0 auto;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .card h3 {
            font-size: 16px;
            margin-bottom: 15px;
            background: #f5f5f5;
            padding: 10px 12px;
            border-radius: 8px;
            color: #333;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #444;
        }

        label span {
            color: red;
        }

        input,
        select,
        textarea {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            font-size: 14px;
            width: 100%;
            transition: border-color 0.2s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #0071e3;
            outline: none;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .btn-primary {
            background: #0071e3;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-primary:hover {
            background: #005bb5;
        }

        .btn-outline {
            background: #fff;
            color: #555;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px 24px;
            cursor: pointer;
            font-size: 15px;
        }

        .note {
            font-size: 13px;
            color: #666;
            margin-top: 15px;
        }

        .note a {
            color: #0071e3;
            text-decoration: none;
        }

        .order-section {
            flex: 0.4;
        }

        .order-info {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .order-info li {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .total {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-size: 18px;
        }

        .total strong {
            color: #0051ff;
            font-weight: 700;
        }
    </style>


    <form wire:submit.prevent='confirmOrder'>
        <div class="row g-4 conform__order-container">
            <!-- BÊN TRÁI -->
            <div class="col-md-7">
                <h2 class="mb-4 fw-bold">Thông tin đăng ký Wi-Fi FPT</h2>

                <!-- Thông tin cá nhân -->
                <div class="card">
                    <div class="card-header">Thông tin cá nhân</div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Họ tên <span>*</span></label>
                                <input type="text" wire:model.live='form.name' class="form-control"
                                    placeholder="Nhập họ tên">
                                <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Số điện thoại <span>*</span></label>
                                <input type="number" class="form-control" wire:model.live='form.phone'
                                    placeholder="Nhập số điện thoại">
                                <x-input-error :messages="$errors->get('form.phone')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Địa chỉ lắp đặt -->
                <div class="card">
                    <div class="card-header">Địa chỉ lắp đặt</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Tỉnh/Thành phố <span>*</span></label>
                            <select wire:model='form.province' wire:change='getCommunes($event.target.value)'
                                class="form-select select2-provinces">
                                <option selected>Chọn tỉnh/thành phố</option>
                                @foreach($provinces as $item)
                                <option value="{{ $item->code }}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('form.province')" class="mt-2" />
                        </div>
                        @if(count($communes) > 0)
                        <div class="mb-3">
                            <label class="form-label">Xã/Phường <span>*</span></label>
                            <select wire:model="form.commune" wire:change='communeValue($event.target.value)'
                                class="form-select">
                                <option selected >Chọn xã/phường</option>
                                @foreach($communes as $item)
                                <option value="{{ $item->code }}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('form.commune')" class="mt-2" />
                        </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input wire:model.live='form.addressDetail' type="text" class="form-control"
                                wire:model.addressDetail='addressDetail'
                                placeholder="Địa chỉ cụ thể: ví dụ số nhà, đường,ấp, xóm, thôn, khóm... ">
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3 box-submitOrderDetail">
                    <button style="width:100%" type="submit" class="btn btn-primary">Gửi thông tin đăng ký</button>
                </div>

                <p class="note mt-3">
                    Bằng việc bấm Gửi thông tin đăng ký quý khách đã đồng ý để FPT Telecom liên hệ tư vấn dịch vụ phù
                    hợp với nhu
                    cầu.
                    Chi tiết xem tại <a href="#">Chính sách xử lý dữ liệu cá nhân</a>.
                </p>
            </div>

            <!-- BÊN PHẢI -->
            <div class="col-md-5">
                <h2 class="mb-4 fw-bold">Thông tin đơn hàng</h2>

                <div class="card">
                    <div class="card-header">Thông tin lắp đặt</div>
                    <div class="card-body">
                        <ul class="order-info">
                            <li><span>Họ tên:</span> <span><strong>{{$form->name}}</strong></span></li>
                            <li><span>Số điện thoại:</span> <span><strong>{{ preg_replace('/(\d{4})(\d{3})(\d{3})/',
                                        '$1.$2.$3', $form->phone) }}</strong></span></li>
                            <li><span>Địa chỉ:</span> <span> <strong>{{ $addressDetail }} @if(isset($commune->name)) -
                                        {{$commune->name . ' - '?? ''}}
                                        @endif{{$province->name ?? ''}}</strong></span></li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Thông tin gói cước</div>
                    <div class="card-body">
                        <ul class="order-info">
                            <li><span>Gói cước Wi-Fi: <strong>{{$wifiProduct->name}}</strong> </span>
                                <span>{{number_format($wifiProduct->price)}}đ/tháng</span>
                            </li>
                        </ul>
                        {{-- <div class="order-total">
                            <span>Tạm tính</span>
                            <span>180.000đ</span>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

@push('scriptsFooter')
<script>
    Livewire.on('swal', data => {
         Swal.fire({
                title: data[0].title,
                icon: data[0].icon ?? 'info',
                text:  data[0].text ?? '',
                confirmButtonText: 'OK',
            }).then((result) => {
        if (result.isConfirmed) {
            // Chuyển hướng sau khi nhấn OK
            if (data[0].redirect) {
                window.location.href = data[0].redirect;
            }
        }
    });;
    });
</script>
@endpush
