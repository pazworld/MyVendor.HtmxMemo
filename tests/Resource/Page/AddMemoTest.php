<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Resource\Page;

use Aura\Sql\ExtendedPdoInterface;
use BEAR\Resource\ResourceInterface;
use MyVendor\HtmxMemo\Injector;
use PHPUnit\Framework\TestCase;

class AddMemoTest extends TestCase
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
    }

    public function testOnPost(): void
    {
        $ro = $this->resource->post('page://self/add-memo', ['title' => 'ふぐ']);
        $this->assertMatchesRegularExpression('/ふぐ/', (string) $ro);
    }
}
