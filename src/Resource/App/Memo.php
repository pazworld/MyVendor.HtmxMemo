<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\App;

use BEAR\Resource\ResourceObject;
use Ray\AuraSqlModule\AuraSqlInject;

class Memo extends ResourceObject
{
    use AuraSqlInject;

    public function onGet(int $id): static
    {
        $sql = 'SELECT * FROM memos WHERE id=:id';
        $bind = ['id' => $id];
        $memo = $this->pdo->fetchOne($sql, $bind);
        $this->body = $memo;

        return $this;
    }

    public function onPut(int $id, string $title): static
    {
        $sql = 'UPDATE memos SET title=:title WHERE id=:id';
        $bind = ['id' => $id, 'title' => $title];
        $this->pdo->perform($sql, $bind);

        return $this;
    }

    public function onDelete(int $id): static
    {
        $sql = 'DELETE FROM memos WHERE id=:id';
        $bind = ['id' => $id];
        $this->pdo->perform($sql, $bind);

        return $this;
    }
}
