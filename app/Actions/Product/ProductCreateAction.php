<?php

namespace App\Actions\Product;

use App\Models\Product;

class ProductCreateAction
{
    public function execute(array $data)
    {
        return Product::create($data);
    }
}
