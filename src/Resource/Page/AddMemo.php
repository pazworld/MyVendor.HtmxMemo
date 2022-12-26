<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class AddMemo extends ResourceObject
{
    use ResourceInject;

    public function onPost(string $title): static
    {
        $ro = $this->resource->post('app://self/memos', ['title' => $title]);
        $uri = 'app://self' . $ro->headers['location'];
        $memo = $this->resource->get($uri);
        $this->body['memo'] = $memo;
        $this->code = 200;

        return $this;
    }
}
