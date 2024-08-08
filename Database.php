<?php

class Database {
    public $connection;



    public function __construct($config,$username= '', $password= '') {

        dd('mysqli:' . http_build_query($config, '', ';')); // example.com?host=localhost&port=3306&dbname=learning-php ----> example.com?host=localhost;port=3306;dbname=learning-php

        $dsn = "mysql:host=${config['host']};port=${config['port']};dbname=${config['database']};charset=${config['charset']};password=${config['password']};";

        $this->connection = new PDO($dsn, $username, $password , [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query){
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }


}
?>