<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gói cước Internet FPT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
            color: #000;
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
        }
    </style>
</head>

<body>
    <header>
        <h1>Chọn gói cước Internet FPT phù hợp với bạn</h1>
    </header>

    <section class="plans-container">
        <div class="plan">
            <div class="plan-header giga">
                <h2>Wifi Internet GIGA</h2>
                <p>Phù hợp với cá nhân và hộ gia đình</p>
            </div>
            <div class="plan-content">
                <p class="price">180.000đ/tháng</p>
                <ul class="utility">
                    <li>Trang bị Modem Wi-Fi</li>
                    <li>Tốc độ lên đến 300 Mbps</li>
                    <li>Phù hợp cho ≥3 thiết bị</li>
                    <li>90 ngày miễn phí F-Safe cơ bản</li>
                </ul>
                <div class="btn-submit-wifi">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn">Đăng ký ngay</button>
                </div>
            </div>
        </div>

        <div class="plan">
            <div class="plan-header sky">
                <h2>Wifi Internet SKY</h2>
                <p>Phù hợp với hộ gia đình lớn</p>
            </div>
            <div class="plan-content">
                <p class="price">190.000đ/tháng</p>
                <ul class="utility">
                    <li>Modem Wi-Fi 6</li>
                    <li>Tốc độ Download lên đến 1 Gbps</li>
                    <li>Phù hợp cho ≥8 thiết bị</li>
                    <li>90 ngày miễn phí F-Safe cơ bản</li>
                </ul>
                <div class="btn-submit-wifi">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn">Đăng ký ngay</button>
                </div>
            </div>
        </div>

        <div class="plan">
            <div class="plan-header vision">
                <h2>Gói Trọn Tầm Nhìn</h2>
                <p>Ưu đãi nhất - Miễn phí Camera Play4</p>
            </div>
            <div class="plan-content">
                <p class="price">230.000đ/tháng</p>
                <ul class="utility">
                    <li>Modem Wi-Fi 6</li>
                    <li>Tốc độ lên đến 500 Mbps</li>
                    <li>Miễn phí 1 Camera Play4</li>
                    <li>Chọn thêm dịch vụ FPT Play, F-Safe Go</li>
                </ul>
                <div class="btn-submit-wifi">
                    <button type="button" class="btn btn-primary btn-submit" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" class="btn">Đăng ký ngay</button>
                </div>
            </div>
        </div>

        <div class="plan">
            <div class="plan-header wifi360">
                <h2>Gói Wi-Fi 360</h2>
                <p>Phủ sóng Wi-Fi mạnh mẽ</p>
            </div>
            <div class="plan-content">
                <p class="price">230.000đ/tháng</p>
                <ul class="utility">
                    <li>Modem Wi-Fi 6</li>
                    <li>Tốc độ lên đến 500 Mbps</li>
                    <li>Tặng miễn phí 1 Wi-Fi Mesh</li>
                    <li>90 ngày miễn phí F-Safe cơ bản</li>
                </ul>
                <div class="btn-submit-wifi">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn">Đăng ký ngay</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <form action="">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-" id="exampleModalLabel">Nhập thông tin lắp đặt Wifi</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="col-12 mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="phone" class="form-label">Số điện thoại liên hệ</label>
                            <input maxlength="10" type="number" class="form-control" id="phone"
                                placeholder="Nhập số điện thoại liên hệ">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ lắp Wifi">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Gửi thông tin</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <footer></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

</html>
