<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Producto creado correctamente',
            'data' => $product
        ]);
    }
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
