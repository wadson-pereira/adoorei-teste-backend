<?php

namespace Domain\Modules\Product\List\Responses;

use Domain\Generics\Responses\BaseResponse;
use Domain\Modules\Product\List\Collection\ProductCollection;

class SuccessResponse extends BaseResponse
{
    public function __construct(readonly ProductCollection $productCollection)
    {
    }
}
