@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.checkout.success.title') }}
@stop

@section('content-wrapper')

    <div class="order-success-content" style="min-height: 300px;">

        <h1>{{ __('shop::app.checkout.success.thanks') }}</h1>

        <p>{{ __('shop::app.checkout.success.order-id-info', ['order_id' => $order->id]) }}</p>

        <p>{{ __('shop::app.checkout.success.info') }}</p>

        <div class="misc-controls">
            <a style="display: inline-block" href="{{ route('shop.payment') }}" class="btn btn-lg btn-primary">
                {{ __('shop::app.checkout.cart.continue-payment') }}
            </a>
        </div>

    </div>

@endsection
