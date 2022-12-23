<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\Page;

use Aura\Sql\ExtendedPdoInterface;
use BEAR\Resource\ResourceInterface;
use MyVendor\HtmxMemo\Injector;
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    private ExtendedPdoInterface $pdo;
    private ResourceInterface $resource;

    protected function setUp(): void
    {
        $injector = Injector::getInstance('test-html-app');
        $this->resource = $injector->getInstance(ResourceInterface::class);
        $this->pdo = $injector->getInstance(ExtendedPdoInterface::class);
        $this->pdo->perform('DROP TABLE IF EXISTS memos');
        $this->pdo->perform('CREATE TABLE memos (id INTEGER PRIMARY KEY, title TEXT)');
        $this->pdo->perform('INSERT INTO memos (title) VALUES ("ねずみ")');
    }

    public function testOnGet(): void
    {
        $ro = $this->resource->get('page://self/index');
        $this->assertSame(200, $ro->code);
        $this->assertMatchesRegularExpression('/ねずみ/', (string) $ro);
    }
}
