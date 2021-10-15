<?php

namespace AfUserDetailPage\Tests;

use AfUserDetailPage\AfUserDetailPage as Plugin;
use Shopware\Components\Test\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'AfUserDetailPage' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['AfUserDetailPage'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}
