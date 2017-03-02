<?php

namespace Budby\MongoDbBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Budby\MongoDbBundle\DependencyInjection\BudbyMongoDbExtension;

class BudbyMongoDbBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new BudbyMongoDbExtension();
    }
}
