# MongoDB Symfony2

Installation
------------

```bash
composer require "budby/mongodb-symfony-bundle"
```

After installing, don't forget to enable the bundle:

```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Budby\MongoDbBundle\MongoDbBundle(),
    );
}
```

Configuration
-------------
```yaml
...
mongo_db:
    host: <your_mongodb_host>
    db:   <your_mongodb_db>
```

Usage
-----
```php
$mongoDbManager = $this->get('mongodb.manager');
$mongoDbManager->createIndex('test_collection', ['name' => 1]);
$mongoDbManager->insertOne('test_collection', [
    'datetime' => $mongoDbManager->typeUTCDateTime(new \DateTime())
]);
```
