<?php

class Database{
    public $connection;
    public $statement;
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

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }
    public function get()
    {
        return $this->statement->fetchAll();
    }
    public function find()
    {
        return $this->statement->fetch();
    }
    public function findOrFail()
    {
        $result = $this->find();
        if(!$result)
        {
            abort();
        }
        return $result;
    }

}