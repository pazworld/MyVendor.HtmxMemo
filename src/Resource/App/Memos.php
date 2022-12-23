<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\App;

use BEAR\Resource\ResourceObject;
use Ray\AuraSqlModule\AuraSqlInject;

class Memos extends ResourceObject
{
    use AuraSqlInject;

    public function onGet(): static
    {
        $memos = $this->pdo->fetchAll('SELECT * FROM memos');
        $this->body = $memos;

        return $this;
    }

    public function onPost(string $title): static
    {
        $sql = 'INSERT INTO memos (title) VALUES (:title)';
        $values = ['title' => $title];
        $this->pdo->perform($sql, $values);
        $id = $this->pdo->lastInsertId();
        $this->code = 201;
        $this->headers['location'] = '/memo?id=' . $id;

        return $this;
    }
}
