<?php
    /**
     * @Thomas-Athanasiou
     *
     * @author Thomas Athanasiou at Hippiemonkeys
     * @link https://github.com/Thomas-Athanasiou
     * @copyright Copyright (c) 2022 Hippiemonkeys Web Inteligence EE (https://hippiemonkeys.com)
     * @package Hippiemonkeys_ElasticsearchGreek
     */

    declare(strict_types=1);

    namespace Hippiemonkeys\ElasticsearchGreek\Plugin\Model\Adapter\Index;

    use Magento\Elasticsearch\Model\Adapter\Index\Builder;

    class GreekBuilder
    {
        /**
         * @inheritdoc
         */
        public function afterBuild(Builder $subject, $result)
        {
            $result['analysis']['analyzer']['default'] = ['type' => 'greek'];
            return $result;
        }
    }
?>