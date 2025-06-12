<?php

class Database
{
    private $db_connection;
    public function __construct($config)
    {
        [
            "database" => $database,
            "dbname" => $dbname,
            "host" => $host,
            "port" => $port,
            "user" => $user,
            "password" => $password
        ] = $config;

        $dsn = "$database:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
        $this->db_connection = new PDO($dsn, null, null, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $params)
    {
        $statement = $this->db_connection->prepare($query, $params);
        $statement->execute($params);

        return $statement;
    }
}
