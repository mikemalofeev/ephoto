@extends('shop::layouts.master')
@section('content-wrapper')
    <div class="error-container" style="width: 100%; display: flex; justify-content: center;">
        <div class="wrapper" style="display: flex; height: 100vh; width: 80vw;
    justify-content: space-between;">
            <div class="error-box">
                <div class="error-title">О НАС</div>
                <br />
                <div class="error-description">

                    <p>ПолиГраф | Фото-холсты | Типография | Севастополь</p>
                    <p>🖨 Принт-центр 📷 Фото-печать 🌿Фото-холсты 🌿Печатаем полиграфию</p>

                    <p>✓ Услуги дизайна ON-LINE (Разработка макетов)</p>
                    <p>✓ Печать полиграфии (Листовки, визитки, буклеты, открытки)</p>
                    <p>✓ Печать пакетов с логотипом</p>
                    <p>✓ Фото-картины на холсте</p>
                    <p>✓ Фотосувениры</p>

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
