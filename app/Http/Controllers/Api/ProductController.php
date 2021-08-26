<?php

namespace App\Http\Controllers\Api;

use App\Actions\Product\ProductCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use Exception;

class ProductController extends Controller
{
    public function index()
    {
        dd('index');
    }

    /**
     * @throws Exception
     */
    public function store(ProductStoreRequest $request, ProductCreateAction $storeAction): ProductResource
    {
        try {
            $product = $storeAction->execute($request->validated());

            return new ProductResource($product);
        } catch (Exception $ex) {
            throw new Exception('Can\'t create a new product, please, try again later.');
        }
    }
}