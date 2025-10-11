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
            padding: 25px;
            color: #fff;
            text-align: center;
            min-height: 165px;
        }

        .giga {
            background: linear-gradient(135deg, #1e88e5, #42a5f5);
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
            padding: 25px;
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
        }
    </style>
</head>

<body>

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



    <footer></footer>
    @livewireScripts
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">

</script>

@stack('scriptsFooter')

</html>
