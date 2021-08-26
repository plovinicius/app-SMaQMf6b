<?php

namespace App\Actions\Product;

use App\Http\Traits\AuditableTrait;
use App\Models\Product;
use Exception;

class ProductCreateAction
{
    use AuditableTrait;

    /**
     * @throws Exception
     */
    public function execute(array $data)
    {
        try {
            $product = Product::create($data);

            $this->addCreateLog($product, $data);

            return $product;
        } catch (Exception $ex) {
            throw new $ex;
        }
    }
}
