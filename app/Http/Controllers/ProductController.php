<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/04/2017
 * Time: 12:04 PM
 */

namespace App\Http\Controllers;



use App\Product;
use App\ShopHasProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(Request $request, $shopId, $productId){
        $shopHasProduct = ShopHasProduct::where("shops_id", $shopId)
            ->where("products_id", $productId)
            ->first();
        $shopHasProduct->fill($request->input());
        $shopHasProduct->save();
        return $shopHasProduct;
    }

    public function forShops($shopId){
        return ShopHasProduct::where('shops_id', $shopId)->get();
    }

    public function all(){
        return Product::all();
    }

}