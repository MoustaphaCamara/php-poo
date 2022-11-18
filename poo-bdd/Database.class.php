<?php
class Database
{
    public string $host;
    public string $user;
    public string $password;
    public string $dbName;
    public PDO $connexion;
    public PDOStatement $request;

    public function __construct(string $host, string $dbName, string $user, string $password)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }
    public function connect(): PDO
    {

        $connexion = new PDO(
            "mysql:host=$this->host;
            charset=utf8;
            dbname=$this->dbName;",
            "$this->user",
            "$this->password"
        );
        return $connexion;
        // ---------------------- TEST
        // try {
        // $connexion = new PDO(
        //     "mysql:host=localhost;
        //     charset=utf8;
        //     dbname=villes_france;",
        //     "root",
        //     ""
        // );
        //     return $connexion;
        // } catch (PDOException $e) {
        //     throw new PDOException($e->getMessage(), (int)$e->getCode());
        // }

        // FIN TEST

    }
}
