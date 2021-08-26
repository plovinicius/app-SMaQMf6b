<?php

namespace App\Actions\Product;

class ProductStockUpdateAction
{
    public function execute($product, array $data)
    {
        $stock = $product->stock;
        $newStock = $data['action'] === 'add' ? $stock + $data['quantity'] : $stock - $data['quantity'];

        $product->update([
            'stock' => $newStock >= 0 ? $newStock : 0
        ]);

        return $product->refresh();
    }
}
