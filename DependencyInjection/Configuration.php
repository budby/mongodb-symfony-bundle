<?php

namespace Budby\MongoDbBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('budby_mongo_db');
        $rootNode
                ->children()
                ->scalarNode('db')
                    ->isRequired()
                ->end()
                ->scalarNode('host')
                    ->isRequired()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
