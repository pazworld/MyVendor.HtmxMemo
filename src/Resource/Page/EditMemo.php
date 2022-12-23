<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class EditMemo extends ResourceObject
{
    use ResourceInject;
    
    public function onGet(int $id): static
    {
        $memo = $this->resource->get('app://self/memo', ['id' => $id]);
        $this->body['memo'] = $memo;

        return $this;
    }

    public function onPut(int $id, string $title): static
    {
        $this->resource->put('app://self/memo', ['id' => $id, 'title' => $title]);
        $memo = $this->resource->get('app://self/memo', ['id' => $id]);
        $this->body['memo'] = $memo;
        $this->code = 303;
        $this->headers['location'] = "/memo?id=$id";

        return $this;
    }
}
