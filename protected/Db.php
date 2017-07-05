<?php

namespace App;

class Db
{
    use Singleton;

    protected $dbh;

    public function __construct()
    {
        $config = Config::instance();
        $dsn = 'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'];
        $user = $config->data['db']['user'];
        $password = $config->data['db']['password'];
        $this->dbh = new \PDO($dsn, $user, $password);
    }

    public function query($sql, $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return false;
    }


    public function execute($sql,$params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if (false !== $res) {
            return true;
        }
        return false;
    }


    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

}