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
        $previousImageIds = $order->images()->pluck('id');

        if (isset($data['images'])) {
            foreach ($data['images'] as $imageId => $image) {
                $file = 'images.' . $imageId;
                $dir = 'order/' . $order->id;

                if (str_contains($imageId, 'image_')) {
                    if (request()->hasFile($file)) {
                        $this->create([
                                'path' => request()->file($file)->store($dir),
                                'order_id' => $order->id
                            ]);
                    }
                } else {
                    if (is_numeric($index = $previousImageIds->search($imageId))) {
                        $previousImageIds->forget($index);
                    }

                    if (request()->hasFile($file)) {
                        if ($imageModel = $this->find($imageId)) {
                            Storage::delete($imageModel->path);
                        }

                        $this->update([
                                'path' => request()->file($file)->store($dir)
                            ], $imageId);
                    }
                }
            }
        }

        foreach ($previousImageIds as $imageId) {
            if ($imageModel = $this->find($imageId)) {
                Storage::delete($imageModel->path);

                $this->delete($imageId);
            }
        }
    }
}
