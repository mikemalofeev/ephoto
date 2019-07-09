<?php

namespace Webkul\Shop\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;

/**
 * StaticController
 *
 */
class StaticController extends Controller
{

    /**
     */
    public function about()
    {
        return view('shop::pages.about');
    }

    /**
     */
    public function payment()
    {
        return view('shop::pages.payment');
    }

    /**
     */
    public function shipment()
    {
        return view('shop::pages.shipment');
    }
}
