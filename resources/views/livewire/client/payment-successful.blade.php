<div>
    <style>
        ._failed {
            border-bottom: solid 4px red !important;
        }

        ._failed i {
            color: red !important;
        }

        ._success {
            box-shadow: 0 15px 25px #00000019;
            padding: 45px;
            width: 100%;
            text-align: center;
            margin: 40px auto;
            border-bottom: solid 4px #28a745;
        }

        ._success i {
            font-size: 55px;
            color: #28a745;
        }

        ._success h2 {
            margin-bottom: 12px;
            font-size: 40px;
            font-weight: 500;
            line-height: 1.2;
            margin-top: 10px;
        }

        ._success p {
            margin-bottom: 0px;
            font-size: 18px;
            color: #495057;
            font-weight: 500;
        }
    </style>
    <div class="container">

        @if(Session::has('success'))
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="message-box _success">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <h2> Đã đăng ký lắp WiFi thành công </h2>
                        <p>
                            Nhân viên tư vấn sẽ sớm liên hệ để tư vấn cho quý khách. <br>
                            Cảm ơn quý khách đã sử dụng dịch vụ! </p>
                    </div>
                </div>
            </div>
        @endif


        {{--
        <hr>


        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="message-box _success _failed">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                    <h2> Your payment failed </h2>
                    <p> Try again later </p>

                </div>
            </div>
        </div> --}}

    </div>
</div>
