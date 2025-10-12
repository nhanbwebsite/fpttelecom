<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gói cước Internet FPT</title>
    <link rel="icon" href="{{  asset('image/favicon.ico') }}" type=”image/x-icon” />
    <link rel="shortcut" icon” href="{{  asset('image/favicon.ico') }}" type=”image/x-icon” />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta name="description"
        content="Đăng ký gói cước Internet FPT tốc độ cao, ổn định, giá ưu đãi nhất. Hỗ trợ lắp đặt miễn phí toàn quốc.">
    <meta name="keywords" content="Internet FPT, Wifi FPT, Lắp mạng FPT, Gói cước FPT Telecom">

    {{-- --}}

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}"> <!-- Đổi link thật -->
    <meta property="og:title" content="Gói cước Internet FPT tốc độ cao, ưu đãi hấp dẫn">
    <meta property="og:description"
        content="Tư vấn, lắp đặt Internet FPT chỉ trong 24h. Đăng ký ngay để nhận ưu đãi đến 50%.">
    <meta property="og:image" content="{{ asset('image/goi360.png') }}"> <!-- Ảnh đại diện share -->
    <meta property="og:image:alt" content="Gói cước Internet FPT tốc độ cao, ưu đãi hấp dẫn">
    <meta property="og:site_name" content="Internet FPT Telecom">


    {{-- --}}


    <meta name="robots" content="index, follow">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scriptsHeader')

    @livewireStyles
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f6f8fb;
            color: #333;
            line-height: 1.6;
        }

        header {
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            font-size: 2rem;
            color: #0d47a1;
        }

        .plans-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            padding: 20px 3%;
        }

        .plan {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .plan:hover {
            transform: translateY(-6px);
        }

        .plan-header {
            /* padding: 25px; */
            /* color: #fff; */
            text-align: center;
            min-height: 165px;
        }

        .giga {
            /* background: linear-gradient(135deg, #1e88e5, #42a5f5); */
        }

        .sky {
            background: linear-gradient(135deg, #0d47a1, #42a5f5);
        }

        .vision {
            background: linear-gradient(135deg, #fb8c00, #f57c00);
        }

        .wifi360 {
            background: linear-gradient(135deg, #ef6c00, #ff9800);
        }

        .plan-header h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .plan-header p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .plan-content {
            padding: 25px 15px;
            /* text-align: center; */
        }

        .btn-submit {
            text-align: center;
        }

        .btn-submit-wifi {
            text-align: center;
        }

        .price {
            font-size: 1.4rem;
            color: #ff6b17;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }

        .utility {
            list-style: none;
            margin: 15px 0;
            padding-left: 0;
        }

        .utility li {
            padding: 6px 0;
            font-size: 0.95rem;
            margin-left: 0;
        }

        .title_ {
            color: #ff6b17;
            font-weight: bold;
        }

        .plan-header.giga h2 {
            font-weight: bold;
        }

        .utility {
            min-height: 230px;
        }

        .image__product {
            width: 100%;
            height: 250px;
            /* bạn có thể chỉnh tuỳ ý, ví dụ 180px, 220px */
            overflow: hidden;
            border-radius: 8px;
            /* tuỳ chọn */

        }

        .product__name {}

        .product__desc {
            height: 80px;
            min-height: 60px;
            font-weight: bold;
        }

        .image__product img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* cắt ảnh vừa khung mà không méo */
            object-position: center;
            display: block;
        }

        .btn {
            display: inline-block;
            background: #1e88e5;
            color: #fff;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #1565c0;
        }

        footer {
            text-align: center;
            padding: 30px;
            font-size: 0.9rem;
            color: #777;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        /* Điện thoại nhỏ */
        @media (max-width: 576px) {
            .plans-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                gap: 20px;
                padding: 20px 5%;
            }

            .box-submitOrderDetail {
                position: fixed;
                bottom: 0px;
                z-index: 99;
                padding: 30px;
                background: #ededed;
                /* width: 100%; */
                right: 0;
                left: 0;
            }

            .conform__order-container .card {
                padding: 0;
            }
        }

        .social-float {
            position: fixed;
            right: 20px;
            bottom: 190px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 999;
        }

        .social-float .icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #004a75;
            /* xanh đậm */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }



        .social-float .icon img {
            width: 30px;
            height: 30px;
        }

        .social-float .icon:hover {
            transform: translateY(-4px);
            background: #0073b1;
        }
    </style>
</head>

<body>
    <div class="logo__ p-4">
        <a href="/"><img src="{{ asset('image/fpt-logo.svg') }}" alt=""></a>
    </div>
    <main>
        {{ $slot }}
    </main>


    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Thông tin đăng ký Wi-Fi </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <form wire:submit.prevent='orderwifi'>
                    <p>Vui lòng điền đầy đủ thông tin </p>
                    <div class="col-12 mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input wire:model='form.name' type="text" class="form-control" id="name"
                            placeholder="Nhập họ và tên">
                        <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
                    </div>
                    <div class="col-12 mb-3">
                        <label for="phone" class="form-label">Số điện thoại liên hệ</label>
                        <input wire:model='form.phone' type="number" class="form-control" id="phone"
                            placeholder="Nhập số điện thoại liên hệ">
                        <x-input-error :messages="$errors->get('form.phone')" class="mt-2" />
                    </div>
                    <div class="col-12 mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" wire:model='form.address' class="form-control" id="address"
                            placeholder="Nhập địa chỉ lắp Wifi">
                        <x-input-error :messages="$errors->get('form.address')" class="mt-2" />
                    </div>
                    <div class="col-12 mb-3 text-center">
                        <button wire:click='orderwifi' type="button" class="btn btn-primary w-100">Gửi thông
                            tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Floating Contact Buttons -->
    <div class="social-float">
        <a href="tel:0984500465" class="icon phone" title="Gọi điện">
            <img src="{{ asset('image/phone.png') }}" alt="Phone">
        </a>
        <a href="https://zalo.me/0939294917" target="_blank" class="icon zalo" title="Zalo">
            <img src="{{ asset('image/Icon_of_Zalo.svg') }}" alt="Zalo">
        </a>
        {{-- <a href="https://www.facebook.com/profile.php?id=61581902981013" target="_blank" class="icon messenger"
            title="Messenger">
            <img src="{{ asset('image/Messenger_Icon.svg') }}" alt="Messenger">
        </a> --}}
        <a href="#" class="icon to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" title="Lên đầu trang">
            <i class="fa-solid fa-arrow-up fs-3 text-white"></i>
        </a>
    </div>



    <footer></footer>
    @livewireScripts
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">

</script>

@stack('scriptsFooter')

</html>
