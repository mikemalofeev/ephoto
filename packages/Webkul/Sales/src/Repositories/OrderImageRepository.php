<?php

namespace Webkul\Sales\Repositories;

use Illuminate\Support\Facades\Storage;
use Webkul\Core\Eloquent\Repository;

/**
 * Product Image Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class OrderImageRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Sales\Contracts\OrderImage';
    }

    /**
     * @param array $data
     * @param mixed $order
     * @return mixed
     */
    public function uploadImages($data, $order)
    {
        if (isset($data['images'])) {
            foreach ($data['images'] as $image) {

                $this->create([
                    'path' => $image['path'],
                    'order_id' => $order->id
                ]);
            }
        }

    }
}
