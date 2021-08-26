<?php

namespace App\Actions\Product;

use App\Http\Traits\AuditableTrait;
use Exception;

class ProductStockUpdateAction
{
    use AuditableTrait;

    /**
     * @throws Exception
     */
    public function execute($product, array $data)
    {
        try {
            $stock = $product->stock;
            $newStock = $data['action'] === 'add' ? $stock + $data['quantity'] : $stock - $data['quantity'];

            $product->update([
                'stock' => $newStock >= 0 ? $newStock : 0
            ]);

            $toLog = array_merge($data, $product->toArray());
            $toLog['previous_stock'] = $stock;
            unset($toLog['created_at'], $toLog['updated_at']);

            $this->addUpdateLog($product, $toLog);

            return $product->refresh();
        } catch (Exception $ex) {
            throw new $ex;
        }
    }
}
