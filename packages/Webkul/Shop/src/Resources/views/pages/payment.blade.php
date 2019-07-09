@extends('shop::layouts.master')
@section('content-wrapper')
    <div class="error-container" style="width: 100%; display: flex; justify-content: center;">
        <div class="wrapper" style="display: flex; height: 100vh; width: 80vw;
    justify-content: space-between;">
            <div class="error-box">
                <div class="error-title">Оплата</div>
                <p></p>
                <div class="error-description">

                    <p>Оплата Онлайн</p>
                    <p>Оплата наличными - г. Севастополь, ул. Колобова 34/1</p>
                    <p>Возможно предоплата 50% заказа</p>

                </div>
                <p><a href="https://vk.com/fotosalon92">Мы вконтакте</a></p>
            </div>

            {{--<div class="error-graphic" style="height: 236px; width: 255px; border: 1px solid red; background-image: url('.{{ asset('images.error') }}.')">--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
