<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedForm = $this->validate($request, [
                'name' => 'required|string|min:5',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'description' => 'required|string|min:5',
            ]);

            $product = Products::create($validatedForm);
            return response()->json($product, 201);
        } catch (\Throwable $th) {
            $errorResponse = [
                'error' => 'Ocorreu um erro ao processar a solicita����o.',
                'message' => $th->getMessage(),
                'trace' => $th->getTrace(),
            ];
            return response()->json($errorResponse, 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products::find($id);

        if(!$product) {
            return response()->json(['message'=> 'Produto n��o encontrado!!!']);
        }

        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::find($id);

        if(!$product) {
            return response()->json(['message'=> 'Produto n��o encontrado!!!']);
        }

        try {
            $product->update($request->all());
            return response()->json($product);
        } catch (\Throwable $th) {
            $errorResponse = [
                'error' => 'Ocorreu um erro ao processar a solicita����o.',
                'message' => $th->getMessage(),
                'trace' => $th->getTrace(),
            ];
            return response()->json($errorResponse, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::find($id);

        if(!$product) {
            return response()->json(['message'=> 'Produto n��o encontrado!!!']);
        }

        $product->delete();
        return response()->json(['message'=> 'Produto exclu��do com sucesso!!!']);

    }
}
