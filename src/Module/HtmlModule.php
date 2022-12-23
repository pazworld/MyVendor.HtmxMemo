<?php

declare(strict_types=1);

namespace MyVendor\HtmxMemo\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\QiqModule\QiqModule;

class HtmlModule extends AbstractAppModule
{
    protected function configure()
    {
        $this->install(new QiqModule($this->appMeta->appDir . '/var/qiq/template'));
    }
}
