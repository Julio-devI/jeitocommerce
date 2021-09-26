<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Logistic;
use App\Models\Discount;
use App\Models\Attributes;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Store a resource by json file
     * 
     * @param \Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function carregarJson(Request $request){
        $file = file_get_contents($request->fileName);
        $dados = json_decode($file, true);
        $item = $dados['item'];
        
        $tempDiscount = Discount::firstOrNew(["id" => $item['discount_id']]);
        $tempDiscount->save();
        
        $tempLogistic = Logistic::firstOrNew(["id" => $item['logistics'][0]['logistic_id']]);
        $tempLogistic->save();

        $tempAttribute = Attributes::firstOrNew(["id" => $item['attributes'][0]['attribute_id']]);
        $tempAttribute->save();

        $tempItem = new Item();
        $tempItem->fill([
            'status' => $item['status'],
            'original_price' => $item['original_price'],
            'package_width' => $item['package_width'],
            'description' => $item['description'],
            'weight' => $item['weight'],
            'views' => $item['views'],
            'rating_star' => $item['rating_star'],
            'price' => $item['price'],
            'shopid' => $item['shopid'],
            'sales' => $item['sales'],
            'discount_id' => $tempDiscount->id,
            'images' => json_encode($item['images']),
            'likes' => $item['likes'],
            'tenures' => json_encode($item['tenures']),
            'condition' => $item['condition'],
            'cmt_count' => $item['cmt_count'],
            'package_height' => $item['package_height'],
            'days_to_ship' => $item['days_to_ship'],
            'name' => $item['name'],
            'currency' => $item['currency'],
            'item_dangerous' => $item['item_dangerous'],
            'item_sku' => $item['item_sku'],
            'variations' => json_encode($item['variations']),
            'is_2tier_item' => $item['is_2tier_item'],
            'size_chart' => $item['size_chart'],
            'package_length' => $item['package_length'],
            'video_info' => json_encode($item['video_info']),
            'is_pre_order' => $item['is_pre_order'],
            'has_variation' => $item['has_variation'],
            'reserved_stock' => $item['reserved_stock'],
            'stock' => $item['stock'],
            'logistic_id' => $tempLogistic->id,
            'attribute_id' => $tempAttribute->id
        ]);
        $tempItem->save();
        
        return response()->json($tempItem->id, 200);
    }

    public function store(Request $request){
        $tempItem = new Item();
        $tempItem->fill([
            'status' => $request->status,
            'original_price' => $request->original_price,
            'package_width' => $request->package_width,
            'description' => $request->description,
            'weight' => $request->weight,
            'views' => $request->views,
            'rating_star' => $request->rating_star,
            'price' => $request->price,
            'shopid' => $request->shopid,
            'sales' => $request->sales,
            'images' => json_encode($request->images),
            'likes' => $request->likes,
            'tenures' => json_encode($request->tenures),
            'condition' => $request->condition,
            'cmt_count' => $request->cmt_count,
            'package_height' => $request->package_height,
            'days_to_ship' => $request->days_to_ship,
            'name' => $request->name,
            'currency' => $request->currency,
            'item_dangerous' => $request->item_dangerous,
            'item_sku' => $request->item_sku,
            'variations' => json_encode($request->variations),
            'is_2tier_item' => $request->is_2tier_item,
            'size_chart' => $request->size_chart,
            'package_length' => $request->package_length,
            'video_info' => json_encode($request->video_info),
            'is_pre_order' => $request->is_pre_order,
            'has_variation' => $request->has_variation,
            'reserved_stock' => $request->reserved_stock,
            'stock' => $request->stock,
            'discount_id' => $request->discount_id,
            'logistic_id' => $request->logistic_id,
            'attribute_id' => $request->logistic_id
        ]);
        $tempItem->save();
    }

    public function update(Request $request){
        $tempItem = Item::find($request->id);
        if($tempItem){
            $tempItem->fill([
                'status' => $request->status,
                'original_price' => $request->original_price,
                'package_width' => $request->package_width,
                'description' => $request->description,
                'weight' => $request->weight,
                'views' => $request->views,
                'rating_star' => $request->rating_star,
                'price' => $request->price,
                'shopid' => $request->shopid,
                'sales' => $request->sales,
                'images' => json_encode($request->images),
                'likes' => $request->likes,
                'tenures' => json_encode($request->tenures),
                'condition' => $request->condition,
                'cmt_count' => $request->cmt_count,
                'package_height' => $request->package_height,
                'days_to_ship' => $request->days_to_ship,
                'name' => $request->name,
                'currency' => $request->currency,
                'item_dangerous' => $request->item_dangerous,
                'item_sku' => $request->item_sku,
                'variations' => json_encode($request->variations),
                'is_2tier_item' => $request->is_2tier_item,
                'size_chart' => $request->size_chart,
                'package_length' => $request->package_length,
                'video_info' => json_encode($request->video_info),
                'is_pre_order' => $request->is_pre_order,
                'has_variation' => $request->has_variation,
                'reserved_stock' => $request->reserved_stock,
                'stock' => $request->stock,
                'discount_id' => $request->discount_id,
                'logistic_id' => $request->logistic_id,
                'attribute_id' => $request->logistic_id
            ]);
            $tempItem->save();
        }
    }

    public function deleteItem(Request $request){
        $tempItem = Item::find($request->id);
        if($tempItem){
            $tempItem->delete();
        }
    }

    public function index()
    {
        return csrf_token(); 
    }
}
