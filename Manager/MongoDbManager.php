<?php

namespace Budby\MongoDbBundle\Manager;

use MongoDB;
use MongoDB\BSON\UTCDateTime;

class MongoDbManager
{
    /**
     * @var MongoDB\Client
     */
    protected $client;

    /**
     * @param string $db
     * @param string $host
     */
    public function setConfigData($db, $host)
    {
        $this->db     = $db;
        $this->host   = $host;
        $this->client = (new MongoDB\Client($host))->$db;
    }

    /**
     * @param string       $collectionName
     * @param array|object $filter
     * @param array        $options
     *
     * @return array|object|null
     */
    public function findOne($collectionName, $filter = [], array $options = [])
    {
        return $this->client->$collectionName->findOne($filter, $options);
    }

    /**
     * @param string       $collectionName
     * @param array|object $filter
     * @param array        $options
     *
     * @return MongoDB\Driver\Cursor
     */
    public function find($collectionName, $filter = [], array $options = [])
    {
        return $this->client->$collectionName->findOne($filter, $options);
    }

    /**
     * @param string       $collectionName
     * @param array|object $document
     * @param array        $options
     *
     * @return MongoDB\InsertOneResult
     */
    public function insertOne($collectionName, $document, array $options = [])
    {
        return $this->client->$collectionName->insertOne($document, $options);
    }

    /**
     * @param string $collectionName
     * @param array  $documents
     * @param array  $options
     *
     * @return MongoDB\InsertManyResult
     */
    public function insertMany($collectionName, array $documents, array $options = [])
    {
        return $this->client->$collectionName->insertOne($documents, $options);
    }

    /**
     * @param string $collectionName
     * @param array|object $filter
     * @param array|object $update
     * @param array        $options
     *
     * @return MongoDB\UpdateResult
     */
    public function updateOne($collectionName, $filter, $update, array $options = [])
    {
        return $this->client->$collectionName->updateOne($filter, $update, $options);
    }

    /**
     * @param string $collectionName
     * @param array|object $filter
     * @param array|object $update
     * @param array        $options
     *
     * @return MongoDB\UpdateResult
     */
    public function updateMany($collectionName, $filter, $update, array $options = [])
    {
        return $this->client->$collectionName->updateMany($filter, $update, $options);
    }

    /**
     * @param string       $collectionName
     * @param array|object $filter
     * @param array|object $replacement
     * @param array        $options
     *
     * @return MongoDB\UpdateResult
     */
    public function replaceOne($collectionName, $filter, $replacement, array $options = [])
    {
        return $this->client->$collectionName->replaceOne($filter, $replacement, $options);
    }

    /**
     * @param string        $collectionName
     * @param array|object  $filter
     * @param array|object  $replacement
     * @param array         $options
     *
     * @return object|null
     */
    public function findOneAndReplace($collectionName, $filter, $replacement, array $options = [])
    {
        return $this->client->$collectionName->findOneAndReplace($filter, $replacement, $options);
    }

    /**
     * @param string       $collectionName
     * @param array|object $filter
     * @param array        $options
     *
     * @return MongoDB\DeleteResult
     */
    public function deleteOne($collectionName, $filter, array $options = [])
    {
        return $this->client->$collectionName->deleteOne($filter, $options);
    }

    /**
     * @param string       $collectionName
     * @param array|object $filter
     * @param array        $options
     *
     * @return MongoDB\DeleteResult
     */
    public function deleteMany($collectionName, $filter, array $options = [])
    {
        return $this->client->$collectionName->deleteMany($filter, $options);
    }

    /**
     * @param string       $collectionName
     * @param array|object $key
     * @param array        $options
     *
     * @return string
     */
    public function createIndex($collectionName, $key, array $options = [])
    {
        return $this->client->$collectionName->createIndex($data);
    }

    /**
     * @param string $collectionName
     * @param string $indexName
     * @param array  $options
     *
     * @return array|object
     */
    public function dropIndex($collectionName, $indexName, array $options = [])
    {
        return $this->client->$collectionName->dropIndex($indexName, $options);
    }

    /**
     * @param string $collectionName
     * @param array  $options
     *
     * @return MongoDB\Driver\Cursor
     */
    public function aggregateData($collectionName, array $options)
    {
        return $this->client->$collectionName->aggregate($options);
    }

    /**
     * @param \DateTime $datetime
     *
     * @return UTCDateTime
     */
    public function returnUTCDateTime(\DateTime $datetime)
    {
        return new MongoDB\BSON\UTCDateTime($datetime);
    }

    /**
     * @return MongoDB\BSON\ObjectId
     */
    public function generateId()
    {
        return new MongoDB\BSON\ObjectId();
    }
}
