<?php

namespace tpext\builder\mdeditor\common;

use tpext\common\Resource as baseResource;

class Resource extends baseResource
{
    protected $version = '1.0.1';

    protected $name = 'builder.mdeditor';

    protected $title = 'mdeditor资源包';

    protected $description = '提供[mdeditor]相关样式资源';

    protected $root = __DIR__ . '/../../';

    protected $assets = 'assets';
}
