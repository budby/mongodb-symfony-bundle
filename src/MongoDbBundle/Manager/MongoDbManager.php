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
     * @param       $collectionName
     * @param array $data
     *
     * @return mixed
     */
    public function insertOne($collectionName, array $data)
    {
        return $this->client->$collectionName->insertOne($data);
    }

    /**
     * @param       $collectionName
     * @param array $data
     *
     * @return mixed
     */
    public function createIndex($collectionName, array $data)
    {
        return $this->client->$collectionName->createIndex($data);
    }

    /**
     * @param $collectionName
     * @param $indexName
     *
     * @return mixed
     */
    public function dropIndex($collectionName, $indexName)
    {
        return $this->client->$collectionName->dropIndex($indexName);
    }

    /**
     * @param array $options
     *
     * @return mixed
     */
    public function aggregateData(array $options)
    {
        return $this->client->$collectionName->aggregate($options);
    }

    /**
     * @param \DateTime $datetime
     *
     * @return UTCDateTime
     */
    public function typeUTCDateTime(\DateTime $datetime)
    {
        return new MongoDB\BSON\UTCDateTime($datetime);
    }

    /**
     * @return MongoDB\BSON\ObjectId
     */
    public function gerenateId()
    {
        return new MongoDB\BSON\ObjectId();
    }
}
