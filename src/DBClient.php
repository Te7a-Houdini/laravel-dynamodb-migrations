<?php
namespace QuanKim\LaravelDynamoDBMigrations;

use Aws\DynamoDb\DynamoDbClient;

class DBClient
{
    protected $dbClient;
    
    public function __construct()
    {
        $this->dbClient = static::factory();
    }
    
    public static function factory()
    {
        return DynamoDbClient::factory([
            'endpoint' =>  env('DYNAMODB_LOCAL_ENDPOINT'),
            'region' => env('DYNAMODB_REGION'),
            'version' => env('DYNAMODB_VERSION'), //for ex 'latest'
            'credentials' => ['key' => env('DYNAMODB_KEY') , 'secret' => env('DYNAMODB_SECRET') ]
         ]);
        
    }
}
