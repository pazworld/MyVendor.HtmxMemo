<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Memo extends ResourceObject
{
    use ResourceInject;

    public function onGet(int $id): static
    {
        $memo = $this->resource->get('app://self/memo', ['id' => $id]);
        $this->body['memo'] = $memo;

        return $this;
    }

    public function onDelete(int $id): static
    {
        $this->resource->delete('app://self/memo', ['id' => $id]);
        $this->body['memo'] = null;

        return $this;
    }
}
