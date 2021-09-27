<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Item;

class AdminAddItemComponent extends Component
{
    public $status;
    public $original_price;
    public $package_width;
    public $description;
    public $weight;
    public $views;
    public $rating_stars;
    public $price;
    public $shopid;
    public $sales;
    public $discount_id;
    public $images;
    public $likes;
    public $item_id;
    public $tenures;
    public $condition;
    public $cmt_count;
    public $package_height;
    public $days_to_ship;
    public $name;
    public $currency;
    public $item_dangerous;
    public $item_sku;
    public $variations;
    public $is_2tier_item;
    public $size_chart;
    public $package_length;
    public $video_info;
    public $is_pre_order;
    public $has_variation;
    public $reserved_stock;
    public $stock;
    public $logistic_id;
    public $attribute_id;

    public function storeItem()
    {
        $this->validate([
        'status'=>'required',
        'original_price'=>'required',
        'package_width'=>'required',
        'description'=>'required',
        'weight'=>'required',
        'views'=>'required',
        'rating_stars'=>'required',
        'price'=>'required',
        'shopid'=>'required',
        'sales'=>'required',
        'discount_id'=>'required',
        'images'=>'required',
        'likes'=>'required',
        'item_id'=>'required',
        'tenures'=>'required',
        'condition'=>'required',
        'cmt_count'=>'required',
        'package_height'=>'required',
        'days_to_ship'=>'required',
        'name'=>'required',
        'currency'=>'required',
        'item_dangerous'=>'required',
        'item_sku'=>'required',
        'variations'=>'required',
        'is_2tier_item'=>'required',
        'size_chart'=>'required',
        'package_length'=>'required',
        'video_info'=>'required',
        'is_pre_order'=>'required',
        'has_variation'=>'required',
        'reserved_stock'=>'required',
        'stock'=>'required',
        'logistic_id'=>'required',
        'attribute_id'=>'required'
        ]);

        $item = new Item();
        $item->status = $this -> status;
        $item->original_price = $this -> original_price;
        $item->package_width = $this -> package_width;
        $item->description = $this -> description;
        $item->weight = $this -> weight;
        $item->views = $this -> views;
        $item->rating_stars = $this -> rating_stars;
        $item->price = $this -> price;
        $item->shopid = $this -> shopid;
        $item->sales = $this -> sales;
        $item->discount_id = $this -> discount_id;
        $item->images = $this -> images;
        $item->likes = $this -> likes;
        $item->item_id = $this -> item_id;
        $item->tenures = $this -> tenures;
        $item->condition = $this -> condition;
        $item->cmt_count = $this -> cmt_count;
        $item->package_height = $this -> package_height;
        $item->days_to_ship = $this -> days_to_ship;
        $item->name = $this -> name;
        $item->currency = $this -> currency;
        $item->item_dangerous = $this -> item_dangerous;
        $item->item_sku = $this -> item_sku;
        $item->variations = $this -> variations; 
        $item->is_2tier_item = $this -> is_2tier_item;
        $item->size_chart = $this -> size_chart;
        $item->package_length = $this -> package_length;
        $item->video_info = $this -> video_info;
        $item->is_pre_order = $this -> is_pre_order;
        $item->has_variation = $this -> has_variation;
        $item->reserved_stock = $this -> reserved_stock;
        $item->stock = $this -> stock;
        $item->logistic_id = $this -> logistic_id;
        $item->attribute_id = $this -> attribute_id;
        $item->save();
        session()->flash('message', 'Item has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-item-component')->layout('layouts.base');
    }
}