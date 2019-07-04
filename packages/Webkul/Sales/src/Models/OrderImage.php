<?php

namespace Webkul\Sales\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Webkul\Sales\Contracts\OrderImage as OrderImageContract;

class OrderImage extends Model implements OrderImageContract
{
    public $timestamps = false;

    protected $fillable = ['path', 'order_id'];

    /**
     * Get the product that owns the image.
     */
    public function order()
    {
        return $this->belongsTo(OrderProxy::modelClass());
    }

    /**
     * Get image url for the product image.
     */
    public function url()
    {
        return Storage::url($this->path);
    }

    /**
     * Get image url for the product image.
     */
    public function getUrlAttribute()
    {
        return $this->url();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = parent::toArray();

        $array['url'] = $this->url;

        return $array;
    }
}
