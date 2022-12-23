<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Module;

use BEAR\Dotenv\Dotenv;
use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use Ray\AuraSqlModule\AuraSqlModule;

use function dirname;

class AppModule extends AbstractAppModule
{
    protected function configure(): void
    {
        (new Dotenv())->load(dirname(__DIR__, 2));
        $dbpath = dirname(__DIR__) . '/../var/db/database.sqlite3';
        $this->install(
            new AuraSqlModule(
                'sqlite:' . $dbpath
            )
        );
            $this->install(new PackageModule());
    }
}
