<?php
    /**
     * @Thomas-Athanasiou
     *
     * @author Thomas Athanasiou at Hippiemonkeys
     * @link https://github.com/Thomas-Athanasiou
     * @copyright Copyright (c) 2023 Hippiemonkeys Web Intelligence EE (https://hippiemonkeys.com)
     * @package Hippiemonkeys_ElasticsearchGreek
     */

    declare(strict_types=1);

    use Magento\Framework\Component\ComponentRegistrar;

    ComponentRegistrar::register(
        ComponentRegistrar::MODULE,
        'Hippiemonkeys_ElasticsearchGreek',
        __DIR__
    );
?>