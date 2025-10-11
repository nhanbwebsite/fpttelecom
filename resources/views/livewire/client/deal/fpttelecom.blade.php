<div>
    <header>
        <h1 class="title_">Chọn gói cước Internet FPT phù hợp với bạn</h1>
    </header>

    <section class="plans-container">

        <div class="row">
            @foreach($wifiProducts as $item)

            @php
            $utility = explode('|', $item->utility);

            @endphp

            <div class="col-12 col-md-3 mb-4">
                <div class="plan">
                    <div class="plan-header giga">
                        <h2>{{$item->name}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                    <div class="plan-content">
                        <p class="price">{{number_format($item->price)}}đ/tháng</p>
                        <ul class="utility">
                            @foreach ($utility as $util)
                            <li><i class="fa-solid fa-check me-2"></i> {{ $util }}</li>
                            @endforeach
                        </ul>

                        <div class="btn-submit-wifi">
                            <a href="{{route('deal.fpttelecom.order',$item->slug)}}" type="button"
                                class="btn btn-primary" class="btn">Đăng ký
                                ngay</a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </section>



</div>
