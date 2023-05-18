<?php

class Database{
    public $connection;
    public function __construct($config,$username='root',$password='')
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";    
        $this->connection = new PDO($dsn,$username,$password);
    }
    public function query($query,$params=[])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;

    }
}