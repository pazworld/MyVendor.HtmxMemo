<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Module;

use BEAR\Package\AbstractAppModule;
use Ray\AuraSqlModule\AuraSqlModule;

class TestModule extends AbstractAppModule
{
    protected function configure(): void
    {
        $dbConfig = 'sqlite::memory:';
        $this->install(new AuraSqlModule($dbConfig));
    }
}
