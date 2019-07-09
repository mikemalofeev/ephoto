@extends('shop::layouts.master')
@section('content-wrapper')
    <div class="error-container" style="width: 100%; display: flex; justify-content: center;">
        <div class="wrapper" style="display: flex; height: 100vh; width: 80vw;
    justify-content: space-between;">
            <div class="error-box">
                <div class="error-title">ДОСТАВКА</div>
                <br />
                <div class="error-description">

                    <ul>
                    <ol>Самовывоз - г. Севастополь, ул. Колобова 34/1</ol>
                    <ol>Доставка по Севастополю 100 руб.</ol>
                    <ol>Доставка в отдаленные районы только при полной оплате</ol>
                    <ol>Доставка транспортной компанией в любую точку мира. Оплата доставки при получении</ol>
                    </ul>

                </div>
                <br />
                <p>☎ тел. +7 978 006 89 56 ☎</p>
                <p>email: mme441889@gmail.com</p>
                <p><a href="https://vk.com/fotosalon92">Мы вконтакте</a></p>
            </div>

            {{--<div class="error-graphic" style="height: 236px; width: 255px; border: 1px solid red; background-image: url('.{{ asset('images.error') }}.')">--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
