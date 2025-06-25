<?php

class Database
{
    private $db_connection;
    protected $statement;
    function __construct($config)
    {
        [
            "database" => $database,
            "dbname" => $dbname,
            "host" => $host,
            "port" => $port,
            "user" => $user,
            "password" => $password
        ] = $config;


        $dsn = "{$database}:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
        $this->db_connection = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->db_connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $note = $this->statement->fetch();

        if (!$note) {
            abort(Response::NOT_FOUND, "Note Not Found", "The note you are looking for does not exist.");
        }

        return $note;
    }
}
