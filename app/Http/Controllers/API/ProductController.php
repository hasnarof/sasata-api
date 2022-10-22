<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'error' => false,
            'data' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json([
            'error' => false,
            'data' => $product
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'seller_id' => 'required',
            'condition' => 'required',
            'is_cod' => 'required',
            'address' => 'required|string',
            'province_id' => 'required',
            'city_id' => 'required',
            'images' => 'required|array',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'error' => true,
                    'message' => $validator->errors()
                ]
            );
        }

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->seller_id = $request->seller_id;
        $product->condition = $request->condition;
        $product->status = 'available';
        $product->is_cod = $request->is_cod;
        $product->address = $request->address;
        $product->province_id = $request->province_id;
        $product->city_id = $request->city_id;
        $product->created_at = now();
        $product->updated_at = now();
        $product->save();

        foreach ($request->images as $key => $image) {
            $productImage = new ProductImage;
            $productImage->product_id = $product->id;
            $productImage->image = $image;
            $productImage->created_at = now();
            $productImage->updated_at = now();
            $productImage->save();
        }

        $getProduct = Product::with('images')->find($product->id);

        return response()->json([
            'error' => false,
            'data' => $getProduct
        ]);
    }
}
