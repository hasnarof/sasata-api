<?php

namespace App\Http\Controllers\API\utils;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '_' . auth()->user()->id . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $imageName);
        $request->image->storeAs('public/images/products', $imageName);

        /* Store $imageName name in DATABASE from HERE */

        return response()->json([
            'error' => false,
            'message' => 'Image uploaded successfully',
            'data' => [
                'url' => 'storage/images/products/' . $imageName
            ]
        ]);
    }
}
