<?php

class Database {
    public $connection;
    public $statement;

    public function __construct($config,$username= '', $password= '') {

        dd('mysqli:' . http_build_query($config, '', ';')); // example.com?host=localhost&port=3306&dbname=learning-php ----> example.com?host=localhost;port=3306;dbname=learning-php

        //  $dsn = "mysql:host=${config['host']};port=${config['port']};dbname=${config['database']};charset=${config['charset']};password=${config['password']};";
        $dsn= 'mysqli:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password , [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query,$params=[]){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }
    public function find(){
            $this->statement->fetch();

    }
    public function get(){
        $this->statement->fetchAll();

    }
    public function findOrFail(){
           $result = $this->find();
           if(! $result){
               abort();
           }
           return $result;
    }

}
?>