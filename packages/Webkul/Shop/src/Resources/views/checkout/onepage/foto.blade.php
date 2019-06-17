<form data-vv-scope="foto-form">

    <div class="form-container" v-if="!this.new_billing_address">
        <div class="form-header mb-30">
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.billing-address') }}</span>

            <a class="btn btn-lg btn-primary" @click = newBillingAddress()>
                {{ __('shop::app.checkout.onepage.new-address') }}
            </a>
        </div>
{{--        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.images.before', ['product' => $product]) !!}--}}

{{--        @include ('admin::catalog.products.accordians.images')--}}

{{--        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.images.after', ['product' => $product]) !!}--}}

    </div>

</form>
