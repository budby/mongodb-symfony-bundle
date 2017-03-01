# MongoDB Symfony2

Installation
------------

```bash
composer require "budby/budby/mongodb-symfony-bundle"
```

After installing, don't forget to enable the bundle:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Budby\MongoDbBundle\BudbyMongoDbBundle(),
    );
}
```

Configuration
-------------
```yaml
...
budby_mongo_db:
    host: <your_mongodb_host>
    db:   <your_mongodb_db>
```

Usage
-----
```php
$mongoDbManager = $this->get('budby_mongodb.manager');
$mongoDbManager->createIndex('collection_name', ['name' => 1]);
$mongoDbManager->insertOne('collection_name', [
    'datetime' => $mongoDbManager->generateUTCDateTime(new \DateTime())
]);
```
