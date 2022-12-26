<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Index extends ResourceObject
{
    use ResourceInject;

    public function onGet(): static
    {
        $memos = $this->resource->get('app://self/memos');
        $this->body['memos'] = $memos;

        return $this;
    }
}
