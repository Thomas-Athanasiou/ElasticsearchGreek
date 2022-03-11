<?php
    namespace Hippiemonkeys\ElasticsearchGreek\Plugin\Model\Adapter\Index;

    use Magento\Elasticsearch\Model\Adapter\Index\Builder;

    class GreekBuilder
    {
        public function afterBuild(Builder $subject, $result)
        {
            $result['analysis']['analyzer']['default'] = ['type' => 'greek'];
            return $result;
        }
    }
?>