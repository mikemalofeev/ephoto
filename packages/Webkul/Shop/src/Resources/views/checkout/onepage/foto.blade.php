<form data-vv-scope="foto-form">

    <div class="form-container" v-if="!this.new_billing_address">
        <div class="form-header mb-30">
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.billing-address') }}</span>

            <a class="btn btn-lg btn-primary" @click = newBillingAddress()>
                {{ __('shop::app.checkout.onepage.new-address') }}
            </a>
        </div>
{{--        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.images.before', ['product' => $product]) !!}--}}

        <accordian :title="'{{ __('admin::app.catalog.products.images') }}'" :active="true">
            <div slot="body">

                {{--{!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.images.controls.before', ['order' => $order]) !!}--}}

                <image-wrapper :button-label="'{{ __('admin::app.catalog.products.add-image-btn-title') }}'" input-name="images" :images='{}'></image-wrapper>

                {{--{!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.images.controls.after', ['order' => $order]) !!}--}}

            </div>
        </accordian>

{{--        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.images.after', ['product' => $product]) !!}--}}

    </div>

</form>
